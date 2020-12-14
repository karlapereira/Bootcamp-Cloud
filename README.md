# Bootcamp-Cloud
Bootcamp sobre tecnologias usadas pelas empresas mais inovadoras do mercado para hospedar suas aplicações de forma Segura, Ágil e com Alta Disponibilidade e deixá-las inabaláveis. 

################################### Resumo ######################
- Explicação sobre Free tier
- Ir em IAM e ir em função. criar uma função do tipo EC2 e permissão dar AmazonS3readonlyAccess
- Grupo de segurança, selecionar o default e editar a regra de entrada colocando para qualquer lugar.
- Iniciar uma instancia, seleciona a imagem Amazon linux 2.

- Escolher as opções., selecionar a IAM role em que foi criada.
- Criação do Banco de dados no RDS
- Escolher o mysql e a versão 5.7.21 e em templates escolher a opção free tier
- Colocar a nome da instancia, nome usuário como admin e a senha (fácil sem caracteres especiais por conta da app)
- Deixar a versão db.t2.micro
- Desabilitar o auto scaling do RDS
- Deixar subnet group default e public access como NO
- Deixar o security group default e escolher a zona us-east-1a
- Em additional configuration colocar o nome em initial database name como dados
- Ir em S3 e criar um bucket, colocar um nome especifico seu, pois ele é único como CPF
- escolher a região da Virginia na criação do bucket
- Desmarcar o bloqueio do bucket para liberar ele.
- Dentro do bucket criado ir na última opção hospedagem de site estático, clicar em editar e ativar.
- copiar o nome do bucket e colar no arquivo da política disponibilizado no canal #avisos da Aula02
- copiar a política e ir em permissão dentro do bucket e colar o script
- ir em IAM e criar um usuário com a opção de acesso programático
- escolher a opção anexar política e selecionar o AmazonS3fullAccess
- Copiar a chave de acesso ou baixar o arquivo com elas. ( se não copiar não será possível recuperar tendo que refazer o processo)
- configurar na aplicação os dados do banco de dados
- Ir em Ec2 e selecionar a sua instancia, ir em action - imagem e criar uma AMI

- configuração do load balancer
- selecionar todas as zonas e usar o mesmo SG da instancia escolhendo um existente
- configuração do target group deixando port 80 e no path deixar somente a "barra" /
- selecionar as duas instancias e clicar em add
- baixar o arquivo da Aula03
- abrir o arquivo s3.conf.php e configurar a chave do usuario IAM da aula2 e colocar o link do site estático do bucket criado na aula1
- Criar uma Função para o codedeploy, ir em IAM vai em função e selecione o nome codedeploy e depois em baixo codedeploy novamente.
- escolher a política padrão do codedeploy e criar a função e colocar o nome
- Ir em codedeploy e criar um aplicativo.
- Escolher a opção EC2, e depois criar um grupo de implantação
- Dar um nome de grupo e selecionar a função que criou no tempo 01:10:00
- selecionar instancias do Amazon Ec2 colocando a TAG das instancias (lembrando, as instancias tem que esta com a TAG)
- Marcar a opção NUNCA na instalação do agent
- Compactar os arquivos alterados para .zip
########################################################
