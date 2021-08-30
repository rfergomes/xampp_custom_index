<div id="wrapper">
  <div class="hero">
    <div class="row">
      <div class="large-12 columns">
        <h1>Windows <span>Perguntas Mais Frequentes</span></h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="large-8 columns">
      <dl class="accordion">
        <dt> Como instalo o XAMPP?</dt>
        <dd>
          <p>O XAMPP para Windows existe em três diferentes modalidades:</p>
          <p>Instalador:<br />
            Provavelmente o jeito mais fácil de instalar XAMPP.</p>
          <p>ZIP:<br />
            Para os puristas: XAMPP como um arquivo ZIP comum.</p>
          <p>7zip:<br />
            Para os puristas com pouca largura de banda: XAMPP como um arquivo 7zip.</p>
          <p>Nota: Se você descompactar os arquivos, pode ser que receba avisos falso-positivos de vírus.</p>
          <p><strong>Executando o instalador</strong></p>
          <p></p>
          <p>Painel de controle do XAMPP para niciar/parar o Apache, MySQL, FileZilla e Mercury ou instalar esses servidores como serviços.</p>
          <p><strong>Instalando a partir de ZIP</strong></p>
          <p>Descompacte os arquivos zip para a pasta de sua escolha. Extraia o XAMPP para o subdiretório "C:\\xampp", abaixo do diretório de destino selecionado. Agora inicie o arquivo "setup_xampp.bat", para ajustar a configuração do XAMPP para seu sistema.</p>
          <p>Se você escolher um diretório raiz "C:\\" como alvo, você não deve começar o "setup_xampp.bat".</p>
          <p>Da mesma forma que a versão do instalador, agora você pode usar o "Painel de Controle" do XAMPP para tarefas adicionais.</p>
        </dd>
        <dt>Does XAMPP include MySQL or MariaDB?</dt>
        <dd>
          <p>Since XAMPP 5.5.30 and 5.6.14, XAMPP ships MariaDB instead of MySQL. The commands and tools are the same for both.</p>
        </dd>
        <dt>Como posso inicializar o XAMPP sem instalação?</dt>
        <dd>
          <p>Se você extrair o XAMPP em uma pasta na raiz de qualquer unidade, como "C:\\" ou "D:\\", por exemplo, você pode executar a maioria dos servidores como Apache ou MySQL diretamente sem antes ter de executar o arquivo "setup_xampp.bat".</p>
          <p>Caso esteja instalando o XAMPP em um drive USB, é preferível que você não use o script de instalação e se mesmo assim quiser usá-lo, selecione caminhos relativos no script de instalação. Isto, porque para cada pc o mesmo drive pode ter uma outra letra de unidade, diferente daquela especificada no caminho absoluto. Você poderá trocar os caminhos de relativo para absoluto a qualquer momento com o script de instalação.</p>
          <p>A maneira mais fácil de instalar o XAMPP é usar o instalador de nossa página de Downloads. Ao completar a instalação, você encontrará o XAMPP em Iniciar > Programas > XAMPP. Você pode usar o Painel de Controle do XAMPP para inicializar/interromper todos os servidores e também para instalar/desinstalar os servidores como serviços do sistema.</p>
          <p>Painel de controle do XAMPP para niciar/parar o Apache, MySQL, FileZilla e Mercury ou instalar esses servidores como serviços.</p>
        </dd>
        <dt>Como inicio e paro o XAMPP?</dt>
        <dd>
          <p>O centro de controle universal é o "Painel de Controle XAMPP" (Obrigado www.nat32.com). Ele é iniciado com:</p>
          <p><code>\xampp\xampp-control.exe</code></p>
          <p>Você pode ainda usar alguns batchfiles para Iniciar/Parar os servidores:</p>
          <p>
          <ul>
            <li>Iniciar MySQL e Apache:
              <code>\xampp\xampp_start.exe</code>
            </li>
            <li>Parar MySQL e Apache:
              <code>\xampp\xampp_stop.exe</code>
            </li>
            <li>Iniciar Apache:
              <code>\xampp\apache_start.bat</code>
            </li>
            <li>Parar o Apache:
              <code>\xampp\apache_stop.bat</code>
            </li>
            <li>Iniciar o MySQL:
              <code>\xampp\mysql_start.bat</code>
            </li>
            <li>Parar o MySQL:
              <code>\xampp\mysql_stop.bat</code>
            </li>
            <li>Inicializar o Mercury Mailserver:
              <code>\xampp\mercury_start.bat</code>
            </li>
            <li>Parar Mercury Mailserver:
              <code>\xampp\mercury_stop.bat</code>
            </li>
            <li>Iniciar FileZilla:
              <code>\xampp\filezilla_start.bat</code>
            </li>
            <li>Parar FileZilla:
              <code>\xampp\filezilla_stop.bat</code>
            </li>
          </ul>
          </p>
          </p>
        </dd>
        <dt>Como posso testar se tudo funcionou corretamente?</dt>
        <dd>
          <p>Escreva o seguinte URL no seu navegador favorito:</p>
          <p><code>http://localhost/</code> ou <code>http://127.0.0.1/</code> </p>
          <p>You should see the XAMPP start page, as shown below.</p>
          <img src="/dashboard/images/screenshots/xampp-windows-start.jpg" />
        </dd>
        <dt>Como posso instalar um servidor como um serviço?</dt>
        <dd>
          <p>Cada servidor no XAMPP pode também ser instalado como um serviço do Windows. Você pode, ainda, instala-los pelo Painel de Controle do XAMPP. Nesse caso, é necessário rodar os scripts ou o Painel de Controle com privilégios de Adminstrador.</p>
          <p>Instalação do serviço do Apache: \\xampp\\apache\\apache_installservice.bat</p>
          <p>Desinstalação do serviço do Apache: \\xampp\\apache\\apache_uninstallservice.bat </p>
          <p>Instalação do serviço do MySQL: \\xampp\\mysql\\mysql_installservice.bat </p>
          <p>Desinstalar o MySQL como um serviço do sistema: \\xampp\\mysql\\mysql_uninstallservice.bat </p>
          <p>Instalar/Desinstalar o FileZilla como um serviço do sistema: \\xampp\\filezilla_setup.bat </p>
          <p>Mercury: Instalação como um serviço do sistema indisponível</p>
        </dd>
        <dt>XAMPP está pronto para produção?</dt>
        <dd>
          <p>XAMPP não é destinado para uso em produção, mas apenas para ambientes de desenvolvimento. O XAMPP é configurado para ser o mais aberto possível para permitir ao desenvolvedor qualquer coisa que ele/ela quiser. Para ambientes de desenvolvimento ele é ótimo, mas em um ambiente de produção , ele pode ser fatal. </p>
          <p>Aqui uma lista de segurança que faltava no XAMPP:</p>
          <ol>
            <li>O administrador (root) do MySQL não tem senha.</li>
            <li>O daemon do MySQL está acessível pela rede. </li>
            <li>ProFTPD usa a senha "lampp" para o usuário "daemon".</li>
            <li>Os usuários padrão do Mercury e FileZilla são conhecidos.</li>
          </ol>
          <p>Todos os pontos podem ser um grande risco de segurança. Especialmente se o XAMPP está acessível via rede e pessoas fora da sua LAN. Também pode ajudar a usar um firewall ou um roteador (NAT). No caso de um roteador ou firewall, seu PC normalmente não é acessível via rede. É até você para corrigir esses problemas. Como uma pequena ajuda,em "XAMPP Security console".</p>
          <p>Por favor, proteja o XAMPP antes de publicar qualquer coisa on-line. Um firewall ou um roteador externo são apenas suficientes para baixos níveis de segurança. Para um pouco mais de segurança, você pode executar o "XAMPP Security console" e atribuir senhas.</p>
          <p>Se você quiser ter o seu XAMPP acessível a partir da internet, você deve ir para o seguinte URI que pode corrigir alguns problemas:</p>
          <p><code> http://localhost/security/</code></p>
          <p>Com o console de segurança, você pode definir uma senha para o usuário MySQL "root" e phpMyAdmin. Você também pode ativar a autenticação para o demopages do XAMPP.</p>
          <p>Essa ferramenta baseada em web não corrige nenhum problema adicional de segurança! O servidor FileZilla FTP e o servidor de mensagens Mercury devem, especialmente, serem protegidos por você.</p>
        </dd>
        <dt>Como desinstalo o XAMPP?</dt>
        <dd>
          <p>Se você instalou a versão do XAMPP com instalador, por favor use o Desinstalador. O Desinstalador irá apagar todas as entradas do XAMPP dos seus registros e irá desinstalar alguns serviços incluídos com o XAMPP. Nós recomendamos que você utilize o programa desinstalador para remover as instalações de XAMPP feitas pelo instalador. Por favor, faça uma cópia de segurança de toda a informação que você deseja manter antes de desinstalar o XAMPP.</p>
          <p>Se você instalou o XAMPP usando as versões em ZIP ou 7zip, desligue todos os servidores XAMPP e saia de todos os painéis. Se você instalou algum serviço, desinstale-os e desligue-os também. Agora, simplesmente apague todo a pasta onde o XAMPP está instalado. Não há entradas de registro ou variáveis de ambiente para limpar.</p>
        </dd>
        <dt>O que é a versão "lite"de XAMPP?</dt>
        <dd>
          <p>XAMPP Lite (significa "leve"como em "peso-leve") é um pacote menor de componentes do XAMPP que é recomendado para trabalhos rápidos que usem somente PHP e MySQL. Alguns servidores e ferramentas, tais como o Mercury Mail e o FileZilla FTP, não estão presentes da versão Lite.</p>
        </dd>
        <dt>Onde devo colocar meu conteúdo web?</dt>
        <dd>
          <p>O diretório principal para todos os documentos WWW é \\xampp\\htdocs. Se você colocar um arquivo "test.html"neste diretório, você poderá acessa-lo com a URI "http://localhost/test.html".</p>
          <p>E "test.php"? Apenas use "http://localhost/test.php". Um script de teste simples pode ser:</p>
          <p><code>&lt;?php<br />
              echo 'Hello world'; <br />
              ?&gt;</code></p>
          <p>Um novo subdiretório para seu web? Basta fazer um novo diretório (por exemplo, "novo") dentro do diretório "\\xampp\\htdocs" (melhor sem os espaços em branco e apenas ASCII), criar um arquivo de teste neste diretório e acessá-lo com "que http://localhost/new/test.php".</p>
          <p><strong>Mais detalhes</strong></p>
          <p>HTML:<br>
            Executável: \xampp\htdocs<br>
            Finais permitidos: .html .htm<br>
            => pacote básico</p>
          <p>SSI:<br>
            Executável: \xampp\htdocs<br>
            Finais permitidos: .shtml<br>
            => pacote básico</p>
          <p>CGI:<br>
            Executável: \xampp\htdocs and \xampp\cgi-bin<br>
            Finais permitidos: .cgi<br>
            => pacote básico</p>
          <p>PHP:<br>
            Executável: \xampp\htdocs and \xampp\cgi-bin<br>
            Finais permitidos: .php<br>
            => pacote básico</p>
          <p>Perl:<br>
            Executável: \xampp\htdocs and \xampp\cgi-bin<br>
            Finais permitidos: .pl<br>
            => pacote básico</p>
          <p>Apache::ASP Perl:<br>
            Executável: \xampp\htdocs<br>
            Finais permitidos: .asp<br>
            => pacote básico</p>
          <p>JSP Java:<br>
            Executável: \xampp\tomcat\webapps\java (e.g.)<br>
            Finais permitidos: .jsp<br>
            => Tomcat add-on</p>
          <p>Servlets Java:<br>
            Executável: \xampp\tomcat\webapps\java (e.g.)<br>
            Finais permitidos: .html (u.a)<br>
            => Tomcat add-on</p>
        </dd>
        <dt>Posso mover a instalação do XAMPP?</dt>
        <dd>
          <p>Sim. Depois de se mudar do diretório XAMPP, você deve executar "setup_xampp.bat". Os caminhos nos arquivos de configuração será ajustado com este passo.</p>
          <p>Se você tiver instalado qualquer servidor como um serviço do Windows, você deve primeiro remover o serviço do Windows, e depois de mover você pode instalar o serviço novamente.</p>
          <p>Aviso: Os arquivos de configuração dos teus próprios scripts, como aplicativos PHP, não estão ajustados. Mas é possível escrever um "plug-in"para o instalador. Como esse plug-in o instalador pode ajustar esses arquivos também.</p>
        </dd>
        <dt>Quais são as "Paginas iniciais automáticas"para os diretórios WWW?</dt>
        <dd>
          <p>O nome de arquivo padrão para a função do Apache "DirectoryIndex" é "index. html" ou "index. php". Toda vez que você está apenas navegando para uma pasta ("http://localhost/xampp/", por exemplo), e Apache pode encontrar tal arquivo, o Apache está exibindo este arquivo em vez de uma listagem de diretório.</p>
        </dd>
        <dt>Onde posso alterar a configuração?</dt>
        <dd>
          <p>Quase todas as configurações do XAMPP, você pode alterar com arquivos de configuração. Basta abrir o arquivo em um editor de texto e alterar a configuração que você quer. Só o FileZilla e o mercúrio devem ser configurado com a ferramenta de configuração do aplicativo.</p>
        </dd>

        <dt>Porque o XAMPP não funciona no Windows XP SP2?</dt>
        <dd>
          <p>A Microsoft oferece um melhor firewall com Service Pack 2 (SP2), que inicia automaticamente. Este firewall agora bloqueia as portas necessárias 80 (http) e 443 (https) e Apache não pode iniciar.</p>
          <p><strong>A solução rápida:</strong></p>
          <p>Disabilite o firewall da Microsoft pelo barra de ferramentas e inicie o XAMPP outra vez. COm esta solução será definido uma excessão no centro de segurança.</p>
          <p><strong>As seguintes portas são usadas para a funcionalidade básica:</strong></p>
          <p>Apache (HTTP): Port 80<br />
            Apache (WebDAV): Port 81</br>
            Apache (HTTPS): Port 443</br>
            MySQL: Port 3306</br>
            FileZilla (FTP): Port 21</br>
            FileZilla (Admin): Port 14147</br>
            Mercury (SMTP): Port 25</br>
            Mercury (POP3): Port 110</br>
            Mercury (IMAP): Port 143</br>
            Mercury (HTTP): Port 2224</br>
            Mercury (Finger): Port 79</br>
            Mercury (PH): Port 105</br>
            Mercury (PopPass): Port 106</br>
            Tomcat (AJP/1.3): Port 8009</br>
            Tomcat (HTTP): Port 8080</p>
        </dd>

        <dt>Por que o XAMPP não funciona no Windows Vista?</dt>
        <dd>
          <p><strong>Controle de Conta de Usuário</strong></p>
          <p>No diretório "C:\\program files" você não tem plenos privilégios de escrita, mesmo como Administrador. Ou tem apenas privilégios limitados (e.g. for ".\\xampp\\htdocs"). Neste caso você não pode editar um arquivo.</br>
            <strong>Solução:</strong> Eleve seus privilégios no explorer (botão direito do mouse / segurança) ou desabilite o controle de conta de usuário (UAC).
          </p>
          <p>Você instalou o Apache/MySQL em "C:\\xampp" como um serviço do sistema mas não consegue inicializar/interromper os serviços com o "Painel de Controle do XAMPP" ou não consegue desinstalá-los.</br></br>
            <strong>Solução:</strong> Use o console de gerenciamento de serviço do Windows ou desabilite o controle de conta de usuário.
          </p>
          <p><strong>Desabilitando o Controle de Conta de Usuário (UAC)</strong></p>
          <p>Para desabilitar o Controle de Conta de Usuário, use o programa "msconfig" (tecla windows + r, digite "msconfig" e clique em "Ok". No "msconfig" vá para "Ferramentas", selecione "Alterar Configurações de UAC", clique em "Iniciar", arraste o indicador para "Nunca notificar", clique em "Ok" e Reinicie o Windows. Ao mesmo tempo, você pode habilitar o UAC novamente.</p>
        </dd>

        <dt>Como faço para verificar a soma de verificação md5?</dt>
        <dd>
          <p>Muitas vezes, as somas de verificação são usadas para comparar arquivos. Um padrão para criar esta soma de verificação md5 (Message Digest Algorithm 5).</p>
          <p>Com esta soma de verificação md5 você pode testar se o seu download do XAMPP está correto ou não, porém, você precisará de um programa especifico capaz de criar estas somas de verificação. Para o Windows, você pode usar esta ferramenta da Microsoft:</p>
          <p><a href="http://support.microsoft.com/kb/841290">Disponibilidade e descrição do Utilitário de Verificação de Integridade de Checksum de Arquivos</a></p>
          <p>Também é possível utilizar outros programas capazes de criar somas de verificação md5, como por exemplo, o GNU md5sum.</p>
          <p>Como instalar um programa (por exemplo, fciv.exe), você pode fazer as seguintes etapas:</p>
          <p>
          <ul>
            <li>Faça o download do XAMPP (f.e. xampp-win32-1.8.2-0.exe)</li>
            <li>Crie a soma de verificação com:</br>
              <code>fciv.exe xampp-win32-1.8.2-0.exe</code>
            </li>
            <li>E agora você pode comparar esta soma de verificação com aquele que você pode encontrar na homepage do XAMPP para Windows.</li>
          </ul>
          </p>
          <p>Se ambas as somas de verificação forem iguais, tudo ok. Se não, o download está quebrado ou o arquivo foi alterado.</p>
        </dd>

        <dt>Por que as mudanças no meu php.ini não fizeram efeito?</dt>
        <dd>
          <p>Se uma mudança no "php. ini" não tem nenhum efeito, é possível que o PHP esteja usando um diferente. Você pode verificar isso com phpinfo ().Vá para o URI http://localhost/xampp/phpinfo.php e procure por "Loaded Configuration File". Este valor mostra o "php.ini" PHP é realmente usando.</p>
          <p><strong>Nota:</strong> Depois de alterar o "php.ini" você tem que reiniciar o Apache para que o Apache / PHP possa ler as novas configurações.</p>
        </dd>

        <dt>Socorro! Existe um vírus no XAMPP!</dt>
        <dd>
          <p>Alguns programas antivírus pode fazer ocorrer algum erro no XAMPP sinalizando algum vírus, geralmente sinalizam o arquivo xampp-manager.exe Este representa um falso positivo que o antivírus erroneamente identifica como um vírus, quando não é. Antes de liberar cada nova versão do XAMPP o executamos através de um software de detecção de vírus. No momento estamos usando <a href="http://www.kaspersky.com/virusscanner">Kapersky Online Virus Scanner</a>. You can also use the online tool <a href="https://www.virustotal.com/">Virus Total</a> for scanning XAMPP or send us an email to security (at) apachefriends (dot) org if you find any issue.</p>
        </dd>

        <dt>Como faço para configurar o meu aplicativo de antivírus?</dt>
        <dd>
          <p>Incluímos todas as dependências e servidores necessários para executar o aplicativo web empacotado, então você vai achar que o XAMPP instala um grande número de arquivos. Se você estiver instalando um aplicativo XAMPP em uma máquina Windows com um aplicativo de antivírus ativado, isso pode retardar a instalação de forma significativa, e também há uma chance de que um dos servidores (servidor web e/ou servidor de banco de dados) possam ser bloqueados pelo aplicativo de antivírus . Se você tiver uma ferramenta de antivírus ativado, verifique as seguintes configurações para a execução do XAMPP sem problemas de desempenho:</p>
          <p>
          <ul>
            <li>Adicionar exceções no firewall: para o Apache, MySQL ou qualquer outro servidor.</li>
            <li>Ao executar a varredura de arquivos: se você tiver ativado a verificação antivírus para todos os arquivos, os arquivos executáveis para os servidores podem ficar lentos.</li>
            <li>Verifique o tráfego para URLs diferentes: Se você estiver desenvolvendo com o XAMPP em seu próprio computador, você pode excluir o tráfego de "localhost" nas configurações do seu antivírus.</li>
          </ul>
          </p>
        </dd>

        <dt>Por que o servidor Apache não inicializa no meu sistema?</dt>
        <dd>
          <p>Este problema pode ser uma de várias razões:</p>
          <p>
          <ul>
            <li>Você inicializou mais de um Servidor HTTP (IIS, Sambar, ZEUS e assim por diante). Somente um servidor pode usar a porta 80. Esta mensagem de erro indica o problema:<br />
              <code>(OS 10048)... make_sock: could not bind to adress 0.0.0.0:80
                no listening sockets available, shutting down</code>
            </li>
            <li>Você tem um outro programa, como por exemplo o "Skype", que também bloqueia a porta 80. Se o problema for o Skype, você pode, no Skype, ir para Ações --> Opções --> Conexão --> desmarque "usar porta 80 para uma porta alternativa" e reinicie o Skype. Agora deve funcionar.</li>
            <li>Você tem um firewall que bloqueia a porta do Apache. Nem todos os firewalls são compatíveis com o Apache, e as vezes apenas desativá-lo não será o suficiente e você terá de desinstalá-lo. Esta mensagem de erro indica o firewall:<br />
              <code>(OS 10038)Socket operation on non-socket: make_sock: for address 0.0.0.0:80,
                apr_socket_opt_set: (SO_KEEPALIVE)</code>
            </li>
          </ul>
          <p>Além disso, se o Apache consegue inicializar, mas o seu navegador não consegue se conectar a ele, pode ser devido a um dos seguintes fatores:</p>
          <ul>
            <li>Alguns rastreadores de vírus podem causar isto da mesma maneira que os firewalls podem interferir.</li>
            <li>Você tem uma cópia do Windows XP Profissional sem o Service Pack 1 instalado. Você precisa ter, no mínimo, o Service Pack 1 instalado para o funcionamento do XAMPP.</li>
          </ul>
          </p>
          <p><strong>Dica:</strong> Se você tem proplemas com as portas usadas, você pode tentar a ferramenta "xampp-portcheck.exe". Talvez isto possa ajudar.</p>
        </dd>

        <dt>Porque é que a minha carga de CPU para o Apache esta quase 99%?</dt>
        <dd>
          <p>Há um dos dois cenários em jogo aqui. Sua CPU é estourar o limite, ou você pode navegador conectar ao servidor, mas não vejo nada (o sistema está tentando insatisfatoriamente carregar a página). Em ambos os casos você pode encontrar a seguinte mensagem no Apache arquivo de log:</p>
          <p><code>Child: Encountered too many AcceptEx faults accepting client connections.
              winnt_mpm: falling back to 'AcceptFilter none'.</code></p>
          <p>O MPM cai de volta para uma implementação mais segura, mas algumas solicitações de clientes não foram processadas corretamente. Para evitar esse erro, use"AcceptFilter" com filtro de aceitação "none" no arquivo "\\xampp\\apache\\conf\\extra\\httpd-mpm.conf" .</p>
        </dd>

        <dt>Por que imagens e folhas de estilo não são exibidos?</dt>
        <dd>
          <p>Às vezes, há problemas com a exibição de imagens e folhas de estilo. Especialmente se esses arquivos estão localizados em uma unidade de rede. Neste caso, você pode ativar (ou adicionar) uma se as seguintes linhas no arquivo "\\xampp\\apache\\conf\\httpd.conf":</p>
          <p><code>EnableSendfile off</br>
              EnableMMAP off</code></p>
          <p>Este problema também pode ser causada por programas de regulação da largura de banda, como NetLimiter.</p>
        </dd>

        <dt>How do I send email with XAMPP?</dt>
        <dd>
          <p>To configure XAMPP to use the included sendmail.exe binary for email delivery, follow these steps:</p>
          <ul>
            <li>Edit the XAMPP "php.ini" file. Within this file, find the [mail function] section and replace it with the following directives. Change the XAMPP installation path if needed.
              <code>
                sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
              </code>
            </li>
            <li>Edit the XAMPP "sendmail.ini" file. Within this file, find the [sendmail] section and replace it with the following directives:
              <code>
                smtp_server=smtp.gmail.com
                smtp_port=465
                smtp_ssl=auto
                error_logfile=error.log
                auth_username=your-gmail-username@gmail.com
                auth_password=your-gmail-password
              </code>
              <p>Remember to replace the dummy values shown with your actual Gmail address and account password. If you don't plan to use Gmail's SMTP server, replace the SMTP host details with appropriate values for your organization or ISP's SMTP server.</p>
            </li>
            <li>Restart the Apache server using the XAMPP control panel.
            </li>
          </ul>
          <p>You can now use PHP's mail() function to send email from your application.</p>
        </dd>

        <dt>Como posso definir uma senha de root no MySQL?</dt>
        <dd>
          <p>Configure it with the "XAMPP Shell" (command prompt). Open the shell from the XAMPP control pane and execute this command:<code>mysqladmin.exe -u root password secret</code>This sets the root password to 'secret'.</p>
        </dd>

        <dt>Posso usar o meu próprio servidor MySQL?</dt>
        <dd>
          <p>Sim. Simplesmente não iniciar o MySQL do pacote XAMPP. Por favor, note que os dois servidores não podem ser iniciados na mesma porta. Se você tiver definido uma senha para o "root", por favor não se esqueça de editar o arquivo "\\xampp\\phpMyAdmin\\config.inc.php".</p>
        </dd>

        <dt>Como faço para restringir o acesso ao phpMyAdmin do lado de fora?</dt>
        <dd>
          <p>In the basic configuration of XAMPP, phpMyAdmin is accessible only from the same host that XAMPP is running on, at http://127.0.0.1 or http://localhost.</p>
          <p>Antes que você possa acessar o servidor MySQL, phpMyAdmin pedirá um nome de usuário e senha. Não se esqueça de definir uma senha para o usuário "root" em primeiro lugar.</p>
        </dd>

        <dt>How do I enable access to phpMyAdmin from the outside?</dt>
        <dd>
          <p>In the basic configuration of XAMPP, phpMyAdmin is accessible only from the same host that XAMPP is running on, at http://127.0.0.1 or http://localhost.</p>
          <p>IMPORTANT: Enabling external access for phpMyAdmin in production environments is a significant security risk. You are strongly advised to only allow access from localhost. A remote attacker could take advantage of any existing vulnerability for executing code or for modifying your data.</p>
          <p>To enable remote access to phpMyAdmin, follow these steps:</p>
          <ul>
            <li>Edit the apache\conf\extra\httpd-xampp.conf file in your XAMPP installation directory.</li>
            <li>Within this file, find the lines below.
              <p><code>
                  Alias /phpmyadmin "C:/xampp/phpMyAdmin/"
                  &lt;Directory "C:/xampp/phpMyAdmin"&gt;
                  AllowOverride AuthConfig
                  Require local
                </code></p>
            </li>
            <li>Then replace 'Require local' with 'Require all granted'.</li>
            <p><code>
                Alias /phpmyadmin "C:/xampp/phpMyAdmin/"
                &lt;Directory "C:/xampp/phpMyAdmin"&gt;
                AllowOverride AuthConfig
                Require all granted
              </code></p>
            <li>Restart the Apache server using the XAMPP control panel.</li>
          </ul>
        </dd>

        <dt>Onde está o suporte IMAP para PHP?</dt>
        <dd>
          <p>Como padrão, o suporte a IMAP para PHP está desativado no XAMPP devido a alguns erros de inicialização misteriosos com algumas versões home como o Windows 98. Se você trabalha com sistemas NT, você pode abrir o arquivo "\\xampp\\php\\php.ini" para ativar a extensão php, removendo o ponto e vírgula do começo da linha ";extension=php_imap.dll". Deveria ser:</br>
            <code>extension=php_imap.dll</code>
          </p>
          <p>Agora reinicie o Apache e IMAP deve funcionar. Você pode usar as mesmas etapas para cada extensão, que não está habilitada na configuração padrão.</p>
        </dd>

        <dt>Por que não alguns aplicativos de código aberto PHP trabalhar com XAMPP no Windows?</dt>
        <dd>
          <p>Um monte de aplicações PHP ou extensões que foram escritas para Linux não foram portadas para o Windows. </p>
        </dd>

        <dt>Posso deletar o diretório de "instalação" depois da instalação?</dt>
        <dd>
          <p>Ops, É melhor não. Os scripts aqui ainda são necessários para todos os pacotes adicionais (add-ons) e atualizações do XAMPP.</p>
        </dd>

        <dt>Como faço para ativar o eaccelerator?</dt>
        <dd>
          <p>Como outras extensões (Zend), você pode ativá-lo no "php. ini". Neste arquivo, habilitar a linha"; zend_extension ="\\xampp\\php\\ext\\php_eaccelerator.dll"". Deve ser:</br>
            <code>zend_extension = "\xampp\php\ext\php_eaccelerator.dll"</code>
          </p>
        </dd>

        <dt>Como faço para corrigir um erro de conexão ao meu servidor MS SQL?</dt>
        <dd>
          <p>Se a extensão mssql foi carregada o php. ini, às vezes, problemas aparecem quando apenas TCP/IP é usado. Você pode corrigir esse problema com um "ntwdblib.dll" mais recente da Microsoft. Por favor, substitua o arquivo antigo em "\\xampp\\apache\\bin" e "\\xampp\\php" o novo. Por causa da licença, nós não podemos empacotar uma versão mais recente deste arquivo com XAMPP.</p>
        </dd>

        <dt>Como eu trabalho com a extensão PHP mcrypt?</dt>
        <dd>
          <p>Para isso, abrimos um tópico no fórum com exemplos e possíveis soluções: <a href="https://community.apachefriends.org/f/viewtopic.php?t=3012">Tópico MCrypt</a></p>
        </dd>

        <dt>Do Microsoft Active Server Pages (ASP) work with XAMPP?</dt>
        <dd>
          <p>N. º E Apache::ASP com o complemento de Perl não é a mesma. Apache::ASP só entende Script em Perl, mas ASP do Internet Information Server (IIS) também conhece o VBScript normal. Mas para ASP-.NET, há um 3o módulo Apache disponível.</p>
        </dd>

        <dt>How can I get XAMPP working on port 80 under Windows 10?</dt>
        <dd>
          <p>By default, Windows 10 starts Microsoft IIS on port 80, which is the same default port used by Apache in XAMPP. As a result, Apache cannot bind to port 80.</p>
          <p>To disable IIS from running on port 80, follow these steps:</p>
          <ul>
            <li>Open the Services panel in Computer Management.</li>
            <li>Search for the 'World Wide Web Publishing Service' and select it.</li>
            <li>Click the link to 'Stop the service'.</li>
            <li>Double-click the service name.</li>
            <li>In the 'Startup type' field, change the startup type to 'Disabled'.</li>
            <li>Click 'OK' to save your changes.</li>
          </ul>
          <p>You should now be able to start Apache in XAMPP on port 80.</p>
          <p>For more information, refer to the 'Troubleshoot Apache Startup Problems' guide included with XAMPP or <a href='https://community.apachefriends.org/f/viewtopic.php?f=16&t=71620'>this forum post</a>.</p>
        </dd>

        <dt>How can I use Microsoft Edge to access local addresses under Windows 10?</dt>
        <dd>
          <p>If your local machine has the host name 'myhost', you will not be able to access URLs such as http://myhost in Microsoft Edge. To resolve this, you should instead use the addresses http://127.0.0.1 or http://localhost.</p>
        </dd>

        <dt>Where are the main XAMPP configuration files?</dt>
        <dd>
          <p>The main XAMPP configuration files are located as follows:</p>
          <ul>
            <li>Apache configuration file: \xampp\apache\conf\httpd.conf, \xampp\apache\conf\extra\httpd-xampp.conf</li>
            <li>PHP configuration file: \xampp\php\php.ini</li>
            <li>MySQL configuration file: \xampp\mysql\bin\my.ini</li>
            <li>FileZilla Server configuration file: \xampp\FileZillaFTP\FileZilla Server.xml</li>
            <li>Apache Tomcat configuration file: \xampp\tomcat\conf\server.xml</li>
            <li>Apache Tomcat configuration file: \xampp\sendmail\sendmail.ini</li>
            <li>Mercury Mail configuration file: \xampp\MercuryMail\MERCURY.INI</li>
          </ul>
        </dd>

      </dl>
    </div>
  </div>

</div>