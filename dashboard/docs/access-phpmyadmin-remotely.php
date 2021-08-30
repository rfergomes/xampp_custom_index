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
          <a class="pdf" target="_blank" href="/dashboard/docs/access-phpmyadmin-remotely.pdf"> Download PDF
            <span>access-phpmyadmin-remotely.pdf</span>
          </a>
        </li>
      </ul>
      <article class="asciidoctor">
        <h1>Enable Remote Access to phpMyAdmin</h1>
        <div class="paragraph">
          <p>XAMPP includes <a href="http://www.phpmyadmin.net/">phpMyAdmin</a>, an open-source, browser-based tool for managing MySQL/MariaDB database servers. By default, for security reasons, phpMyAdmin is configured to only accept connections from the host on which XAMPP is installed. Attempting to access phpMyAdmin from any other host will produce the error below:</p>
        </div>
        <div class="imageblock">
          <div class="content">
            <img src="./images/access-phpmyadmin-remotely/image1.png" alt="image1">
          </div>
        </div>
        <div class="paragraph">
          <p>To enable remote access to phpMyAdmin from other hosts, follow these steps:</p>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p>Edit the <em>apache/conf/extra/httpd-xampp.conf</em> file in your XAMPP installation directory (usually, <em>C:\xampp</em>).</p>
            </li>
            <li>
              <p>Within this file, find the block below:</p>
              <div class="literalblock">
                <div class="content">
                  <pre>&lt;Directory "/xampp/phpMyAdmin"&gt;
  AllowOverride AuthConfig
  Require local
  ...</pre>
                </div>
              </div>
              <div class="paragraph">
                <p>Update this block and replace <em>Require local</em> with <em>Require all granted</em>, so that it looks like this:</p>
              </div>
              <div class="literalblock">
                <div class="content">
                  <pre>&lt;Directory "/xampp/phpMyAdmin"&gt;
  AllowOverride AuthConfig
  Require all granted
  ...</pre>
                </div>
              </div>
            </li>
            <li>
              <p>Save the file and restart the Apache server using the XAMPP control panel.</p>
            </li>
          </ol>
        </div>
        <div class="paragraph">
          <p>You should now be able to access phpMyAdmin from other hosts.</p>
        </div>
      </article>
    </div>
  </div>

</div>