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
          <a class="pdf" target="_blank" href="/dashboard/docs/create-framework-project-zf2.pdf"> Download PDF
            <span>create-framework-project-zf2.pdf</span>
          </a>
        </li>
      </ul>
      <article class="asciidoctor">
        <h1>Start a New Zend Framework 2 Project</h1>
        <div class="paragraph">
          <p>XAMPP makes it easy to start developing with PHP, and <a href="http://framework.zend.com/">Zend Framework
              2</a> is one of the most popular PHP development frameworks. This guide walks you through the process of
            initializing a new Zend Framework 2 project with XAMPP.</p>
        </div>
        <div class="admonitionblock note">
          <table>
            <tr>
              <td class="icon">
                <i class="fa icon-note" title="Note"></i>
              </td>
              <td class="content">
                This guide assumes that you have already downloaded and installed Git for Windows, and that the git
                binary is in your Windows PATH. If you don&#8217;t have Git for Windows, you can <a
                  href="http://git-scm.com/download/win">download and install it from here</a>. It also assumes that the
                new Zend Framework 2 application will be accessible at the URL <a href="http://localhost/myapp/"
                  class="bare">http://localhost/myapp/</a>.
              </td>
            </tr>
          </table>
        </div>
        <div class="paragraph">
          <p>Follow these steps:</p>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p><a href="https://github.com/zendframework/ZendSkeletonApplication">Download the Zend Framework 2
                  skeleton application</a> as a ZIP archive from Github.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/create-framework-project-zf2/image1.png" alt="image1">
                </div>
              </div>
            </li>
            <li>
              <p>Within your XAMPP installation directory (usually <em>C:\xampp</em>), create a new directory named
                <em>apps\</em> (if it doesn&#8217;t already exist). Then, within this new <em>apps\</em> directory,
                create a directory to hold your Zend Framework 2 application and its related XAMPP configuration files.
                In this example, call the directory <em>myapp\</em>.
              </p>
            </li>
            <li>
              <p>Extract the contents of the ZIP archive to the <em>myapp\</em> directory. This will produce a
                <em>zendframework-ZendSkeletonApplication-[xx]\</em> subdirectory in the <em>myapp\</em> directory.
                Rename this newly-created subdirectory to <em>htdocs</em>.
              </p>
              <div class="admonitionblock note">
                <table>
                  <tr>
                    <td class="icon">
                      <i class="fa icon-note" title="Note"></i>
                    </td>
                    <td class="content">
                      This new <em>htdocs</em> directory will be the main working directory for your Zend Framework 2
                      project.
                    </td>
                  </tr>
                </table>
              </div>
            </li>
            <li>
              <p>Within the <em>myapp\</em> directory, create a new <em>conf\</em> subdirectory.</p>
              <div class="olist loweralpha">
                <ol class="loweralpha" type="a">
                  <li>
                    <p>Within the new <em>conf\</em> subdirectory, use your text editor to create and populate a file
                      named <em>httpd-prefix.conf</em> with the following content:</p>
                    <div class="literalblock">
                      <div class="content">
                        <pre>Alias /myapp/ "C:/xampp/apps/myapp/htdocs/public/"
Alias /myapp "C:/xampp/apps/myapp/htdocs/public"
Include "C:/xampp/apps/myapp/conf/httpd-app.conf"</pre>
                      </div>
                    </div>
                  </li>
                  <li>
                    <p>Within the <em>conf\</em> subdirectory, also create and populate a file named
                      <em>httpd-app.conf</em> with the following content:
                    </p>
                    <div class="literalblock">
                      <div class="content">
                        <pre>&lt;Directory C:/xampp/apps/myapp/htdocs/public&gt;
   Options +FollowSymLinks
   AllowOverride All
   Require all granted
&lt;/Directory&gt;</pre>
                      </div>
                    </div>
                  </li>
                </ol>
              </div>
            </li>
            <li>
              <p>Edit the <em>httpd-xampp.conf</em> file in the <em>apache\conf\extra\</em> subdirectory of your XAMPP
                installation directory and add the following line at the end to include the <em>httpd-prefix.conf</em>
                file created earlier.</p>
              <div class="literalblock">
                <div class="content">
                  <pre>Include "C:/xampp/apps/myapp/conf/httpd-prefix.conf"</pre>
                </div>
              </div>
              <div class="admonitionblock note">
                <table>
                  <tr>
                    <td class="icon">
                      <i class="fa icon-note" title="Note"></i>
                    </td>
                    <td class="content">
                      Remember to update the above file and directory paths so that they&#8217;re valid for your system.
                    </td>
                  </tr>
                </table>
              </div>
            </li>
            <li>
              <p>Check that you have a directory structure like this:</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/create-framework-project-zf2/image2.png" alt="image2">
                </div>
              </div>
            </li>
            <li>
              <p>Restart the Apache server using the XAMPP control panel.</p>
            </li>
            <li>
              <p>Launch a new Windows command shell using the "Shell" button in the XAMPP control panel.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/create-framework-project-zf2/image3.png" alt="image3">
                </div>
              </div>
            </li>
            <li>
              <p>Within the command shell, change to the <em>myapp\htdocs\</em> directory and run the following commands
                to update <a href="https://getcomposer.org/">Composer</a> (the PHP dependency manager) and install the
                Zend Framework 2 components.</p>
              <div class="literalblock">
                <div class="content">
                  <pre>php composer.phar self-update
php composer.phar install</pre>
                </div>
              </div>
              <div class="paragraph">
                <p>Here&#8217;s an example of what you might see as Composer downloads and installs dependencies.</p>
              </div>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/create-framework-project-zf2/image4.png" alt="image4">
                </div>
              </div>
            </li>
            <li>
              <p>Once Composer is done, you should be able to access the Zend Framework 2 skeleton application by
                browsing to <a href="http://localhost/myapp" class="bare">http://localhost/myapp</a>. Here is an example
                of the default welcome page you should see:</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/create-framework-project-zf2/image5.png" alt="image5">
                </div>
              </div>
            </li>
          </ol>
        </div>
        <div class="paragraph">
          <p>You can now begin developing your Zend Framework 2 application by modifying the skeleton application code.
            For more information, <a href="http://framework.zend.com/manual/2.3/en/user-guide/overview.html">refer to
              the Zend Framework 2 User Guide</a>.</p>
        </div>
      </article>
    </div>
  </div>

</div>