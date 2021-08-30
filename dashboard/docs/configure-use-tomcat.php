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
          <a class="pdf" target="_blank" href="/dashboard/docs/configure-use-tomcat.pdf"> Download PDF
            <span>configure-use-tomcat.pdf</span>
          </a>
        </li>
      </ul>
      <article class="asciidoctor">
        <h1>Configure and Use Apache Tomcat</h1>
        <div class="paragraph">
          <p>XAMPP for Windows comes with Apache Tomcat built in, making it easy to get started with Java-based Web applications. This guide will walk you through the process of using Apache Tomcat with XAMPP.</p>
        </div>
        <div class="paragraph">
          <p>XAMPP for Windows does not include Java, which is a pre-requisite for using Apache Tomcat. If you do not already have Java installed, you will see an error similar to the below when you attempt to start Apache Tomcat through the XAMPP control panel.</p>
        </div>
        <div class="imageblock">
          <div class="content">
            <img src="./images/configure-use-tomcat/image1.png" alt="image1">
          </div>
        </div>
        <div class="paragraph">
          <p>To correct this, install Java and then attempt to use Apache Tomcat, as below:</p>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p>Browse to <a href="https://www.java.com/en/download/">https://www.java.com/en/download/</a> and follow the instructions to download the latest version of the Java Runtime Environment.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/configure-use-tomcat/image2.png" alt="image2">
                </div>
              </div>
            </li>
            <li>
              <p>Follow the on-screen instructions to install Java.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/configure-use-tomcat/image3.png" alt="image3">
                </div>
              </div>
              <div class="paragraph">
                <p>Once installed, you will see a message like the one below:</p>
              </div>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/configure-use-tomcat/image4.png" alt="image4">
                </div>
              </div>
              <div class="admonitionblock note">
                <table>
                  <tr>
                    <td class="icon">
                      <i class="fa icon-note" title="Note"></i>
                    </td>
                    <td class="content">
                      On some versions of Windows, you will not be able to install Java without administrator privileges. You may either need to log in as a user with administrative rights or, if you are using the offline Java installer, you may need to right-click the installer file and select the "Run as administrator" menu option, then enter administrator credentials (if required) to proceed.
                    </td>
                  </tr>
                </table>
              </div>
            </li>

            <li>
              <p>Ensure you select the "Set JAVA_HOME" and "Javasoft (Oracle) registry entries" when installing your Java distribution. For example, if using AdoptOpenJDK, you can easily achieve that by selecting the "Entire feature will be installed on local hard drive" in the root element of the list.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/configure-use-tomcat/image8.png" alt="image8">
                </div>
              </div>
            </li>


            <li>
              <p>Start the Apache Tomcat server using the XAMPP control panel.</p>
            </li>
          </ol>
        </div>
        <div class="imageblock">
          <div class="content">
            <img src="./images/configure-use-tomcat/image5.png" alt="image5">
          </div>
        </div>
        <div class="paragraph">
          <p>You should now be able to access Apache Tomcat by browsing to <a href="http://localhost:8080/" class="bare">http://localhost:8080/</a> in your browser&#8217;s address bar. Here&#8217;s an example of what you should see:</p>
        </div>
        <div class="imageblock">
          <div class="content">
            <img src="./images/configure-use-tomcat/image6.png" alt="image6">
          </div>
        </div>
        <div class="paragraph">
          <p>Apache Tomcat includes two applications, the "manager" application and the "host-manager" application, that simplify management and deployment of Web applications and provide detailed information on server status. These applications can be accessed from the Apache Tomcat welcome page, as highlighted in the image above.</p>
        </div>
        <div class="paragraph">
          <p>Access to the above applications is blocked by default. To access them, you must configure one or more sets of administrator accounts and then assign the roles "manager-gui" and/or "admin-gui" to these accounts. Accounts with the "manager-gui" role would have access to the "manager" application, and those with the "admin-gui" role would have access to the "host-manager" application.</p>
        </div>
        <div class="paragraph">
          <p>To configure these accounts, follow the steps below:</p>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p>Edit the <em>tomcat-users.xml</em> file in the <em>tomcat/conf</em> subdirectory of your XAMPP installation directory (typically <em>C:\xampp</em>) and add the line below, before the closing <em>&lt;/tomcat-users&gt;</em> element:</p>
              <div class="literalblock">
                <div class="content">
                  <pre>&lt;user username="admin" password="admin" roles="manager-gui,admin-gui" /&gt;</pre>
                </div>
              </div>
              <div class="paragraph">
                <p>This configures an account with username "admin" and password "admin", with access to both the Apache Tomcat Web applications. Remember to replace the username and password with values specific to your installation.</p>
              </div>
              <div class="paragraph">
                <p>If you prefer to have a separate account for each application, replace the previous configuration with this example:</p>
              </div>
              <div class="literalblock">
                <div class="content">
                  <pre>&lt;user username="manager" password="manager" roles="manager-gui" /&gt;
&lt;user username="admin" password="admin" roles="admin-gui" /&gt;</pre>
                </div>
              </div>
            </li>
            <li>
              <p>Save the changes.</p>
            </li>
            <li>
              <p>Restart the Apache Tomcat server using the XAMPP control panel.</p>
            </li>
          </ol>
        </div>
        <div class="paragraph">
          <p>You should now be able to access the Apache Tomcat Web applications using the configured credentials. Here&#8217;s an example of the management Web application, which includes controls to deploy new WAR applications.</p>
        </div>
        <div class="imageblock">
          <div class="content">
            <img src="./images/configure-use-tomcat/image7.png" alt="image7">
          </div>
        </div>
      </article>
    </div>
  </div>

</div>