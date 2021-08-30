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
          <a class="pdf" target="_blank" href="/dashboard/docs/increase-php-file-upload-limit.pdf"> Download PDF
            <span>increase-php-file-upload-limit.pdf</span>
          </a>
        </li>
      </ul>
      <article class="asciidoctor">
        <h1>Increase the PHP File Upload Limit</h1>
        <div class="paragraph">
          <p>To increase the allowed file size for uploads through PHP, follow these steps:</p>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p>Edit the <em>php.ini</em> file in the <em>php/</em> subdirectory of your XAMPP installation directory
                (usually, <em>C:\xampp</em>). Within this file, find the <em>post_max_size</em> and
                <em>upload_max_filesize</em> variables and change them to reflect the new file upload limit. For
                example, to restrict uploads to not more than 16M, change these variables as shown below:
              </p>
              <div class="literalblock">
                <div class="content">
                  <pre>; Maximum size of POST data that PHP will accept.
; http://php.net/post-max-size
post_max_size=16M
...
; Maximum allowed size for uploaded files.
; http://php.net/upload-max-filesize
upload_max_filesize=16M</pre>
                </div>
              </div>
            </li>
            <li>
              <p>Save your changes to the file.</p>
            </li>
            <li>
              <p>Restart the Apache server.</p>
            </li>
          </ol>
        </div>
        <div class="paragraph">
          <p>The new file upload limit will now come into effect.</p>
        </div>
      </article>
    </div>
  </div>

</div>