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
          <a class="pdf" target="_blank" href="/dashboard/docs/reset-mysql-password.pdf"> Download PDF
            <span>reset-mysql-password.pdf</span>
          </a>
        </li>
      </ul>
      <article class="asciidoctor">
        <h1>Reset the MySQL/MariaDB Root Password</h1>
        <div class="paragraph">
          <p>By default, the MySQL/MariaDB installation that ships with XAMPP has an empty root password. This is a
            serious security risk, especially if you plan to use XAMPP in production scenarios.</p>
        </div>
        <div class="paragraph">
          <p>To change the MySQL/MariaDB root password, follow these steps:</p>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p>Ensure that the MySQL/MariaDB server is running.</p>
            </li>
            <li>
              <p>Open your Windows command prompt by clicking the "Shell" button in the XAMPP control panel.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/reset-mysql-password/image1.png" alt="image1">
                </div>
              </div>
            </li>
            <li>
              <p>Use the <em>mysqladmin</em> command-line utility to alter the MySQL/MariaDB password, using the
                following syntax:</p>
              <div class="literalblock">
                <div class="content">
                  <pre>mysqladmin --user=root password "newpassword"</pre>
                </div>
              </div>
              <div class="paragraph">
                <p>For example, to change the MySQL/MariaDB root password from its default empty value to the password
                  <em>gue55me</em>, you would execute:
                </p>
              </div>
              <div class="literalblock">
                <div class="content">
                  <pre>mysqladmin --user=root password "gue55me"</pre>
                </div>
              </div>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/reset-mysql-password/image2.png" alt="image2">
                </div>
              </div>
              <div class="paragraph">
                <p>Or, if a password has already been previously set and you&#8217;d like to change it to a new one, you
                  can use the following syntax:</p>
              </div>
              <div class="literalblock">
                <div class="content">
                  <pre>mysqladmin --user=root --password=oldpassword password "newpassword"</pre>
                </div>
              </div>
              <div class="paragraph">
                <p>For example, to change the root password from <em>12345</em> to <em>gue55me</em>, you would execute:
                </p>
              </div>
              <div class="literalblock">
                <div class="content">
                  <pre>mysqladmin --user=root --password=12345 password "gue55me"</pre>
                </div>
              </div>
            </li>
            <li>
              <p>Test that your password change has been accepted, by attempting to connect to the MySQL/MariaDB server
                using the <em>mysql</em> command-line client in the same directory. For example, you could use the
                command below to connect to the server and return the results of a calculation:</p>
              <div class="literalblock">
                <div class="content">
                  <pre>mysql --user=root --password=gue55me -e "SELECT 1+1"</pre>
                </div>
              </div>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/reset-mysql-password/image3.png" alt="image3">
                </div>
              </div>
            </li>
          </ol>
        </div>
      </article>
    </div>
  </div>

</div>