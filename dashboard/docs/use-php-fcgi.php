<div id="wrapper">
  <div class="hero">
    <div class="row">
      <div class="large-12 columns">
        <h1>Documentation</h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
      <ul class="sub-nav">
        <li>
          <a class="pdf" target="_blank" href="/dashboard/docs/use-php-fcgi.pdf"> Download PDF
            <span>use-php-fcgi.pdf</span>
          </a>
        </li>
      </ul>
      <article class="asciidoctor">
        <h1>Run PHP under FastCGI</h1>
        <div class="paragraph">
          <p>By default, XAMPP runs PHP as an Apache handler. An alternative approach is to run PHP under FastCGI, which
            can produce better performance in certain scenarios. To do this, follow these steps:</p>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p>Download a binary version of the <em>mod_fcgid</em> Apache module from <a
                  href="http://www.apachelounge.com/download/">the ApacheLounge website</a>. This module is included in
                the <em>modules-2.4.x-win32-VC11.zip</em> archive.</p>
              <div class="admonitionblock note">
                <table>
                  <tr>
                    <td class="icon">
                      <i class="fa icon-note" title="Note"></i>
                    </td>
                    <td class="content">
                      XAMPP for Windows only uses 32-bit Apache builds.
                    </td>
                  </tr>
                </table>
              </div>
            </li>
            <li>
              <p>Extract the <em>mod_fcgid.so</em> file from the downloaded archive file and copy it to the
                <em>apache\modules</em>\ subdirectory of your XAMPP installation directory (usually, <em>C:\xampp</em>).
              </p>
            </li>
            <li>
              <p>Edit the <em>httpd-xampp.conf</em> file in the <em>apache\conf\extra\</em> subdirectory of your XAMPP
                installation directory. Within this file, make the following changes:</p>
              <div class="olist loweralpha">
                <ol class="loweralpha" type="a">
                  <li>
                    <p>Search for the line</p>
                    <div class="literalblock">
                      <div class="content">
                        <pre>LoadModule php5_module "/xampp/php/php5apache2_4.dll"</pre>
                      </div>
                    </div>
                    <div class="paragraph">
                      <p>and modify it to read</p>
                    </div>
                    <div class="literalblock">
                      <div class="content">
                        <pre>LoadModule fcgid_module modules/mod_fcgid.so</pre>
                      </div>
                    </div>
                  </li>
                  <li>
                    <p>Find and delete the following lines:</p>
                    <div class="literalblock">
                      <div class="content">
                        <pre>&lt;FilesMatch "\.php$"&gt;
   SetHandler application/x-httpd-php
&lt;/FilesMatch&gt;
&lt;FilesMatch "\.phps$"&gt;
   SetHandler application/x-httpd-php-source
&lt;/FilesMatch&gt;</pre>
                      </div>
                    </div>
                  </li>
                  <li>
                    <p>Add the following lines:</p>
                    <div class="literalblock">
                      <div class="content">
                        <pre>FcgidInitialEnv PHPRC "c:/xampp/php"
AddHandler fcgid-script .php
FcgidWrapper "c:/xampp/php/php-cgi.exe" .php</pre>
                      </div>
                    </div>
                    <div class="admonitionblock note">
                      <table>
                        <tr>
                          <td class="icon">
                            <i class="fa icon-note" title="Note"></i>
                          </td>
                          <td class="content">
                            Remember to adjust the file and directory paths above to reflect valid paths on your system.
                          </td>
                        </tr>
                      </table>
                    </div>
                  </li>
                </ol>
              </div>
            </li>
            <li>
              <p>Restart your Apache server through the XAMPP control panel for your changes to take effect.</p>
            </li>
          </ol>
        </div>
        <div class="paragraph">
          <p>PHP should now be active using FastCGI. To verify this, browse to the URL <a
              href="http://localhost/xampp/phpinfo.php" class="bare">http://localhost/xampp/phpinfo.php</a>, which
            displays the output of the <em>phpinfo()</em> command, and check the "Server API" value near the top of the
            page.</p>
        </div>
        <div class="imageblock">
          <div class="content">
            <img src="./images/use-php-fcgi/image1.png" alt="image1">
          </div>
        </div>
      </article>
    </div>
  </div>

</div>