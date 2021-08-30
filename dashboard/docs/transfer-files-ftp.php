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
          <a class="pdf" target="_blank" href="/dashboard/docs/transfer-files-ftp.pdf"> Download PDF
            <span>transfer-files-ftp.pdf</span>
          </a>
        </li>
      </ul>
      <article class="asciidoctor">
        <h1>Configure FTP Access</h1>
        <div class="paragraph">
          <p>XAMPP includes the server version of <a href="https://filezilla-project.org/">FileZilla</a>, an open-source
            FTP solution. This makes it easy to transfer files to and from a XAMPP environment using FTP.</p>
        </div>
        <div class="paragraph">
          <p>To illustrate, assume that you have a simple PHP script named <em>example.php</em> on your Windows desktop
            containing the following code, that you wish to transfer to the XAMPP server.</p>
        </div>
        <div class="literalblock">
          <div class="content">
            <pre>&lt;!-- example.php --&gt;
&lt;html&gt;
 &lt;head&gt;&lt;/head&gt;
 &lt;body&gt;
   &lt;h2&gt;&lt;?php echo "Hello. Today is " . date('l'); ?&gt;.&lt;/h2&gt;
 &lt;/body&gt;
&lt;/html&gt;</pre>
          </div>
        </div>
        <div class="paragraph">
          <p>To transfer files using FTP, you must first configure the FileZilla FTP server. Follow the steps below.</p>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p>Ensure that FileZilla is running.</p>
            </li>
            <li>
              <p>Start the FileZilla administration interface by clicking the "Admin" button in the XAMPP control panel.
              </p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/transfer-files-ftp/image1.png" alt="image1">
                </div>
              </div>
            </li>
            <li>
              <p>In the resulting "Connect to Server" dialog box, leave all values at their default values and click
                "OK".</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/transfer-files-ftp/image2.png" alt="image2">
                </div>
              </div>
              <div class="paragraph">
                <p>You should now arrive at the FileZilla server console.</p>
              </div>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/transfer-files-ftp/image3.png" alt="image3">
                </div>
              </div>
            </li>
            <li>
              <p>You now need to set up at least one FTP user. To do this, click the "Edit &#8594; Users" menu item.
                This will bring you to the user management interface.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/transfer-files-ftp/image4.png" alt="image4">
                </div>
              </div>
            </li>
            <li>
              <p>Click the "Add" button to add a new user account. Enter a name for the new user account.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/transfer-files-ftp/image5.png" alt="image5">
                </div>
              </div>
            </li>
            <li>
              <p>Select and check the "Password" field and enter a password for the new user.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/transfer-files-ftp/image6.png" alt="image6">
                </div>
              </div>
            </li>
            <li>
              <p>Next, you need to define which folders the user has access to. To do this, click the "Shared folder"
                sub-item in the left navigation menu.</p>
            </li>
            <li>
              <p>Click the "Add" button and select the <em>htdocs\</em> subdirectory of the XAMPP installation directory
                as the user&#8217;s home directory.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/transfer-files-ftp/image7.png" alt="image7">
                </div>
              </div>
            </li>
            <li>
              <p>Grant the user all available rights to this directory.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/transfer-files-ftp/image8.png" alt="image8">
                </div>
              </div>
            </li>
            <li>
              <p>Click "OK" to save your changes.</p>
            </li>
            <li>
              <p>Use the "File &#8594; Quit" menu item to disconnect from the FileZilla administration interface.</p>
            </li>
          </ol>
        </div>
        <div class="paragraph">
          <p>You can now transfer files to the XAMPP server by following the steps below:</p>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p>Launch your FTP client and enter connection details as below.</p>
              <div class="ulist">
                <ul>
                  <li>
                    <p>If you’re connecting to the server from the same system, use "127.0.0.1" as the host address. If
                      you’re connecting from a different system, use the network hostname or IP address of the XAMPP
                      server.</p>
                  </li>
                  <li>
                    <p>Use "21" as the port.</p>
                  </li>
                  <li>
                    <p>Specify the username and password configured previously as your FTP credentials.</p>
                  </li>
                </ul>
              </div>
              <div class="paragraph">
                <p>Your FTP client should now connect to the server and enter the <em>C:\xampp\htdocs</em> directory,
                  which is the default Web server document root.</p>
              </div>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/transfer-files-ftp/image9.png" alt="image9">
                </div>
              </div>
            </li>
            <li>
              <p>Transfer the file from your home directory to the server using normal FTP transfer conventions. If
                you’re using a graphical FTP client, you can usually drag and drop the file from one directory to the
                other. If you’re using a command-line FTP client, you can use the FTP PUT command.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/transfer-files-ftp/image10.png" alt="image10">
                </div>
              </div>
            </li>
            <li>
              <p>Once the file is successfully transferred, you should be able to see it in action by browsing to <a
                  href="http://localhost/example.php" class="bare">http://localhost/example.php</a>, as shown below:</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/transfer-files-ftp/image11.png" alt="image11">
                </div>
              </div>
            </li>
          </ol>
        </div>
      </article>
    </div>
  </div>

</div>