Projeto de API de Poligonos da Emcash

API para cadastro e somas de poligonos

Pré-Requisitos:
O projeto foi desenvolvido a partir de Laravel e Mysql e insomnia
Necessario importa o arquivo "poligonos.sql" para uma base de dados para a execução
O projeto foi construido a parti da arquitetura MVC.
O teste unitario foi feito contemplando que a base não pode ser nula ou zero

Executando o projeto:

Após fazer o download do projeto, é necessario ativar ele usando o comando laravel a seguir.

Acesse terminal e entre no caminho da pasta onde ele esta baixado Ex: C:/Teste-emcash. e execute o comando "php artisan serve" ele ira passar o url do localhost com sua porta Ex: http://127.0.0.1:8000
Obs:Não feche o prompt senão o projeto será desligado.

Assim o projeto acessará suas rotas.

Cadastrando os poligonos:
Depois que o processo esta ativado, use o insomnia para o cadastro dos poligonos.

Crie uma nova Request dentro dele do tipo 'POST' e o body como 'JSON'.

Depois que for criado coloque a URL : http://localhost:8000/api/poligonos/retangulo para cadastrar retangulos e http://localhost:8000/api/poligonos/triangulo para cadastrar triangulos.

Dentro do terminal escreva o codigo abaixo.


![retangulo](https://user-images.githubusercontent.com/92166000/136819508-85607cdc-ff46-40e9-8dc8-1d11f12494c2.JPG)


Escreva a base e altura que desejar e clique em 'Send' assim o poligono estará cadastrado no banco.


Realizando a soma de todos os poligonos cadastrados:

Crie um novo request do tipo 'GET' e adicione a URL http://localhost:8000/api/poligonos/total. Ela mostrará o total dos poligonos cadastrados.




![triangulo](https://user-images.githubusercontent.com/92166000/136819867-f8da77b4-e301-4e3f-92c7-02347d385506.JPG)




Dentro da WEB

![trinagulo](https://user-images.githubusercontent.com/92166000/136819895-631e2912-eb13-46e0-920c-f8190e9f1e1d.JPG)




