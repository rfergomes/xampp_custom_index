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
          <a class="pdf" target="_blank" href="/dashboard/docs/use-different-php-version.pdf"> Download PDF
            <span>use-different-php-version.pdf</span>
          </a>
        </li>
      </ul>
      <article class="asciidoctor">
        <h1>Use a Different PHP Version</h1>
        <div class="paragraph">
          <p>In many cases, you might want to use XAMPP with a different PHP version than the one that comes
            pre-installed. You might do this to get the benefits of a newer version of PHP, or to reproduce bugs using
            an earlier version of PHP.</p>
        </div>
        <div class="paragraph">
          <p>To use a different version of PHP with XAMPP, follow these steps:</p>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p>Download a binary build of the PHP version that you wish to use from the PHP website, and extract the
                contents of the compressed archive file to your XAMPP installation directory (usually,
                <em>C:\xampp</em>). Ensure that you give it a different directory name to avoid overwriting the existing
                PHP version. For example, in this tutorial, we&#8217;ll call the new directory
                <em>C:\xampp\php5-6-0</em>.</p>
              <div class="admonitionblock note">
                <table>
                  <tr>
                    <td class="icon">
                      <i class="fa icon-note" title="Note"></i>
                    </td>
                    <td class="content">
                      Ensure that the PHP build you download matches the Apache build (VC9 or VC11) in your XAMPP
                      platform.
                    </td>
                  </tr>
                </table>
              </div>
            </li>
            <li>
              <p>Within the new directory, rename the <em>php.ini-development</em> file to <em>php.ini</em>. If you
                prefer to use production settings, you could instead rename the <em>php.ini-production</em> file to
                <em>php.ini</em>.</p>
            </li>
            <li>
              <p>Edit the <em>httpd-xampp.conf</em> file in the <em>apache\conf\extra\</em> subdirectory of your XAMPP
                installation directory. Within this file, search for all instances of the old PHP directory path and
                replace them with the path to the new PHP directory created in Step 1.</p>
              <div class="paragraph">
                <p>In particular, be sure to change the lines</p>
              </div>
              <div class="literalblock">
                <div class="content">
                  <pre>LoadFile "/xampp/php/php5ts.dll"
LoadFile "/xampp/php/libpq.dll"
LoadModule php5_module "/xampp/php/php5apache2_4.dll"</pre>
                </div>
              </div>
              <div class="paragraph">
                <p>to</p>
              </div>
              <div class="literalblock">
                <div class="content">
                  <pre>LoadFile "/xampp/php5-6-0/php5ts.dll"
LoadFile "/xampp/php5-6-0/libpq.dll"
LoadModule php5_module "/xampp/php5-6-0/php5apache2_4.dll"</pre>
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
            <li>
              <p>Restart your Apache server through the XAMPP control panel for your changes to take effect.</p>
            </li>
          </ol>
        </div>
        <div class="paragraph">
          <p>The new version of PHP should now be active. To verify this, browse to the URL <a
              href="http://localhost/xampp/phpinfo.php" class="bare">http://localhost/xampp/phpinfo.php</a>, which
            displays the output of the <em>phpinfo()</em> command, and check the version number at the top of the page.
          </p>
        </div>
        <div class="imageblock">
          <div class="content">
            <img src="./images/use-different-php-version/image1.png" alt="image1">
          </div>
        </div>
      </article>
    </div>
  </div>

</div>