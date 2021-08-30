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
          <a class="pdf" target="_blank" href="/dashboard/docs/send-mail.pdf"> Download PDF
            <span>send-mail.pdf</span>
          </a>
        </li>
      </ul>
      <article class="asciidoctor">
        <h1>Send Mail with PHP</h1>
        <div class="paragraph">
          <p>If you&#8217;re a PHP application developer, you might need to send email notifications through your custom
            PHP applications. With XAMPP, there are two ways to do this: you can use the included <em>sendmail.exe</em>
            binary, or you can use the third-party <a href="http://phpmailer.worxware.com/">PHPMailer</a> class. This
            guide walks you through both options.</p>
        </div>
        <div class="admonitionblock note">
          <table>
            <tr>
              <td class="icon">
                <i class="fa icon-note" title="Note"></i>
              </td>
              <td class="content">
                This guide assumes that you have an existing Gmail account, and that you will use Gmail&#8217;s SMTP
                server to transmit email. You can also use your organization or ISP&#8217;s mail server, although
                you&#8217;ll need to replace key details, such as the SMTP server name and port, with appropriate values
                for your environment. Your network administrator or ISP support desk will typically be able to provide
                this information. The example code provided in this tutorial is illustrative only and should not be used
                in production environments.
              </td>
            </tr>
          </table>
        </div>
        <div class="paragraph">
          <p>To configure XAMPP to use <em>sendmail.exe</em> for email notifications, follow these steps:</p>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p>Edit the <em>php.ini</em> file in the <em>php\</em> subdirectory of your XAMPP installation directory
                (usually, <em>C:\xampp</em>). Within this file, find the [mail function] section and replace it with the
                following directives:</p>
              <div class="literalblock">
                <div class="content">
                  <pre>sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"</pre>
                </div>
              </div>
            </li>
            <li>
              <p>Edit the <em>sendmail.ini</em> file in the <em>sendmail\</em> subdirectory of your XAMPP installation
                directory. Within this file, find the [sendmail] section and replace it with the following directives:
              </p>
              <div class="literalblock">
                <div class="content">
                  <pre>smtp_server=smtp.gmail.com
smtp_port=465
smtp_ssl=auto
error_logfile=error.log
auth_username=your-gmail-username@gmail.com
auth_password=your-gmail-password</pre>
                </div>
              </div>
              <div class="paragraph">
                <p>Remember to replace the dummy values shown with your actual Gmail address and account password.</p>
              </div>
            </li>
            <li>
              <p>Restart the Apache server using the XAMPP control panel.</p>
            </li>
          </ol>
        </div>
        <div class="paragraph">
          <p>You can now use PHP&#8217;s <em>mail()</em> function to send email from your application. To illustrate how
            it can be used with your Gmail account, use your text editor to create an example script named
            <em>sendmail.php</em> in the <em>htdocs\</em> subdirectory and fill it with the following code. Once done,
            save your changes.</p>
        </div>
        <div class="literalblock">
          <div class="content">
            <pre>&lt;?php
$to = 'recipients@email-address.com';
$subject = 'Hello from XAMPP!';
$message = 'This is a test';
$headers = "From: your@email-address.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS";
} else {
   echo "ERROR";
}</pre>
          </div>
        </div>
        <div class="paragraph">
          <p>Remember to replace the dummy values shown with valid email addresses. For this simple test, use your own
            email address as the recipient address.</p>
        </div>
        <div class="paragraph">
          <p>Now, browse to the URL <a href="http://localhost/sendmail.php"
              class="bare">http://localhost/sendmail.php</a> to execute the script and send the email message. If all
            goes well, you should see a success notification in your browser. If you used your own email address for the
            recipient address, you should also receive the email message.</p>
        </div>
        <div class="imageblock">
          <div class="content">
            <img src="./images/send-mail/image1.png" alt="image1">
          </div>
        </div>
        <div class="paragraph">
          <p>To configure XAMPP to use PHPMailer for email notifications, follow these steps:</p>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p>Download PHPMailer from its Github repository using the "Download Zip" button.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/send-mail/image2.png" alt="image2">
                </div>
              </div>
            </li>
            <li>
              <p>Create a directory for your new application within the <em>htdocs\</em> subdirectory of your XAMPP
                installation directory. In this tutorial, the application directory is named <em>example\</em>.</p>
            </li>
            <li>
              <p>Extract the contents of the PHPMailer ZIP archive to the application directory.</p>
            </li>
          </ol>
        </div>
        <div class="paragraph">
          <p>You can now use PHPMailer to send email from your application. To illustrate how it can be used with your
            Gmail account, use your text editor to create an example script named <em>phpmailer.php</em> in the
            application directory, and fill it with the following code. Once done, save your changes.</p>
        </div>
        <div class="literalblock">
          <div class="content">
            <pre>&lt;?php
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail-&gt;isSMTP();
$mail-&gt;SMTPSecure = 'ssl';
$mail-&gt;SMTPAuth = true;
$mail-&gt;Host = 'smtp.gmail.com';
$mail-&gt;Port = 465;
$mail-&gt;Username = 'your-gmail-username@gmail.com';
$mail-&gt;Password = 'your-gmail-password';
$mail-&gt;setFrom('your@email-address.com');
$mail-&gt;addAddress('recipients@email-address.com');
$mail-&gt;Subject = 'Hello from PHPMailer!';
$mail-&gt;Body = 'This is a test.';
//send the message, check for errors
if (!$mail-&gt;send()) {
    echo "ERROR: " . $mail-&gt;ErrorInfo;
} else {
    echo "SUCCESS";
}</pre>
          </div>
        </div>
        <div class="paragraph">
          <p>Remember to replace the dummy values shown with your actual Gmail address and account password. You should
            also use a valid sender and recipient address. For this simple test, use your own email address as the
            recipient address.</p>
        </div>
        <div class="paragraph">
          <p>Now, browse to the URL <a href="http://localhost/example/phpmailer.php"
              class="bare">http://localhost/example/phpmailer.php</a>. This should execute the script and send the email
            message. If all goes well, you should see a success notification in your browser. If you used your own email
            address for the recipient address, you should also receive the email message.</p>
        </div>
        <div class="imageblock">
          <div class="content">
            <img src="./images/send-mail/image3.png" alt="image3">
          </div>
        </div>
        <div class="admonitionblock note">
          <table>
            <tr>
              <td class="icon">
                <i class="fa icon-note" title="Note"></i>
              </td>
              <td class="content">
                As a security precaution, Gmail will automatically rewrite the From: and Reply-to: headers in your email
                message to reflect your Gmail address. If you want to avoid this, you must add and validate your custom
                email address in your Gmail account as a sender. Refer to <a
                  href="https://support.google.com/mail/answer/22370?hl=en">Gmail&#8217;s documentation for more
                  information and important restrictions</a>.
              </td>
            </tr>
          </table>
        </div>
      </article>
    </div>
  </div>

</div>