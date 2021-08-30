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
          <a class="pdf" target="_blank" href="/dashboard/docs/change-mysql-temp-dir.pdf"> Download PDF
            <span>change-mysql-temp-dir.pdf</span>
          </a>
        </li>
      </ul>
      <article class="asciidoctor">
        <h1>Change the MySQL Temporary Files Directory</h1>
        <div class="paragraph">
          <p>By default, MySQL&#8217;s temporary files are stored in the <em>tmp\</em> subdirectory of your XAMPP
            installation directory (usually, <em>C:\xampp</em>). In case you wish to change the location of this
            directory, follow these steps:</p>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p>Edit the <em>my.ini</em> file in the <em>mysql\bin\</em> subdirectory of your XAMPP installation
                directory. Within this file, find the <em>tmpdir</em> variable in the [mysqld] section and change it to
                reflect your new desired location. For example:</p>
              <div class="literalblock">
                <div class="content">
                  <pre>tmpdir = "D:/temp"</pre>
                </div>
              </div>
            </li>
            <li>
              <p>Save your changes to the file.</p>
            </li>
            <li>
              <p>Restart the MySQL server using the XAMPP control panel.</p>
            </li>
          </ol>
        </div>
        <div class="paragraph">
          <p>MySQL&#8217;s temporary files should now get created in the new location.</p>
        </div>
      </article>
    </div>
  </div>

</div>