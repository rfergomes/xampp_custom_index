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
          <a class="pdf" target="_blank" href="/dashboard/docs/deploy-git-app.pdf"> Download PDF
            <span>deploy-git-app.pdf</span>
          </a>
        </li>
      </ul>
      <article class="asciidoctor">
        <h1>Deploy an Application Using Git</h1>
        <div class="paragraph">
          <p><a href="http://git-scm.com/">Git</a> is a popular distributed version control system. As you work with
            XAMPP, you might often find yourself needing to download and install applications or code libraries from a
            developer&#8217;s public git repository.</p>
        </div>
        <div class="paragraph">
          <p>This guide walks you through the process, showing you how to use a git client to transfer code from a
            public online git repository to your XAMPP server. As an example, this guide assumes that you wish to
            download the latest version of <a href="http://www.slimframework.com/">Slim</a>, a popular PHP
            micro-framework for Web application development that also has its own Github repository.
            NOTE: This guide uses <a href="http://code.google.com/p/gitextensions/">Git Extensions</a>, an open source
            git client that&#8217;s available for Windows, Linux and Mac OS, and assumes that you have already
            downloaded and installed this software. If you don&#8217;t already have this, you can <a
              href="http://code.google.com/p/gitextensions/">download it from the official Git Extensions website</a>,
            and <a href="http://git-extensions-documentation.readthedocs.org/en/latest/getting_started.html">install it
              using these instructions</a>.</p>
        </div>
        <div class="paragraph">
          <p>To download Slim (or any other application) from its git repository, follow these steps:</p>
        </div>
        <div class="olist arabic">
          <ol class="arabic">
            <li>
              <p>Ensure that your Apache server is running.</p>
            </li>
            <li>
              <p>Obtain the repository&#8217;s clone URL. On Github, this can be easily obtained by visiting the
                project&#8217;s Github page and copying the clone URL from the right side of the page. For third-party
                or private git repositories, you can obtain the clone URL by asking the project team directly. Make a
                note of the clone URL, as you&#8217;ll need it in subsequent steps.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/deploy-git-app/image1.png" alt="image1">
                </div>
              </div>
            </li>
            <li>
              <p>Launch Git Extensions by double-clicking the icon in the Windows Start menu or Start screen.</p>
            </li>
            <li>
              <p>Click the "Clone repository" link or use the "Start &#8594; Clone repository&#8230;&#8203;" menu item.
              </p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/deploy-git-app/image2.png" alt="image2">
                </div>
              </div>
            </li>
            <li>
              <p>In the resulting "Clone" dialog box, enter the clone URL obtained in the first step. Set the
                destination directory to the <em>htdocs\</em> subdirectory of your XAMPP installation directory
                (typically, <em>C:\xampp</em>). Optionally, change the name of the subdirectory that will hold the
                downloaded code.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/deploy-git-app/image3.png" alt="image3">
                </div>
              </div>
            </li>
            <li>
              <p>Click the "Clone" button to start cloning the repository. Git Extensions will display a progress dialog
                as it downloads the code from the source repository.</p>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/deploy-git-app/image4.png" alt="image4">
                </div>
              </div>
            </li>
            <li>
              <p>Once the repository has been cloned, Git Extensions will prompt you to open the new repository. Click
                "Yes".</p>
              <div class="paragraph">
                <p>You should now see the entire commit history of the repository in a graphical tree structure,
                  together with details on the changes made in each commit.</p>
              </div>
              <div class="imageblock">
                <div class="content">
                  <img src="./images/deploy-git-app/image5.png" alt="image5">
                </div>
              </div>
            </li>
          </ol>
        </div>
        <div class="paragraph">
          <p>At this point, the code has been downloaded from the remote git repository and you can begin using it. In
            this particular case, since the Slim framework includes a starter application, you can simply browse to the
            URL <a href="http://localhost/Slim" class="bare">http://localhost/Slim</a> and you should see the example
            application&#8217;s welcome page, as shown below.</p>
        </div>
        <div class="imageblock">
          <div class="content">
            <img src="./images/deploy-git-app/image6.png" alt="image6">
          </div>
        </div>
        <div class="admonitionblock note">
          <table>
            <tr>
              <td class="icon">
                <i class="fa icon-note" title="Note"></i>
              </td>
              <td class="content">
                You can use Git Extensions to create a new branch of the codebase should you wish to make any changes to
                it. Any changes you make will be automatically reflected in the Git Extensions interface, and if you
                have appropriate privileges, you can also commit your changes back to the remote repository. <a
                  href="http://git-scm.com/book">Learn more about git</a>, or <a
                  href="https://git-extensions-documentation.readthedocs.org/">read the Git Extensions
                  documentation</a>.
              </td>
            </tr>
          </table>
        </div>
      </article>
    </div>
  </div>

</div>