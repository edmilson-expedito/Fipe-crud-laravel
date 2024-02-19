## Fipe CRUD Laravel e Crawler Python FIPE

Este repositório contém dois projetos complementares: um projeto Laravel que implementa um CRUD (Create, Read, Update, Delete) para gerenciar informações de carros e um projeto Python que realiza o crawling de dados da FIPE para fornecer informações atualizadas sobre veículos.

### Laravel CRUD:

- **Repositório Laravel:** [Fipe CRUD Laravel](https://github.com/edmilson-expedito/Fipe-crud-laravel)
- **Versão do PHP:** 8.3
- **Banco de Dados:** SQLite

O projeto Laravel utiliza a versão 8.3 do framework Laravel e PHP 8.3, com um banco de dados SQLite. Ele oferece um CRUD completo para gerenciar informações de carros, incluindo operações de criação, leitura, atualização e exclusão.

### Crawler Python FIPE:

- **Repositório Python:** [Crawler Python FIPE](https://github.com/edmilson-expedito/Crawler-python-FIPE)
- **Versão do Python:** 3.10.12

O projeto Python é um crawler que utiliza Python 3.10.12 para coletar dados da FIPE. Ele automatiza a coleta de informações atualizadas sobre veículos, que são então utilizadas pelo projeto Laravel para fornecer dados precisos e atualizados para o CRUD.

### Como Executar os Projetos:

#### Laravel CRUD:

1. **Clonar o Repositório:**
   ```
   git clone https://github.com/edmilson-expedito/Fipe-crud-laravel
   ```

2. **Instalar Dependências:**
   ```
   cd Fipe-crud-laravel
   composer install
   ```

3. **Configurar o Ambiente:**
   - Copie o arquivo `.env.example` e renomeie-o para `.env`.
   - Configure as variáveis de ambiente, incluindo o banco de dados SQLite.
  
4. **Gerar a Chave de Aplicação:**
   ```
   php artisan key:generate
   ```

5. **Executar Migrações:**
   ```
   php artisan migrate
   ```

6. **Executar Servidor de Desenvolvimento:**
   ```
   php artisan serve
   ```

#### Crawler Python FIPE:

1. **Clonar o Repositório:**
   ```
   git clone https://github.com/edmilson-expedito/Crawler-python-FIPE
   ```

2. **Instalar Dependências:**
   ```
   cd Crawler-python-FIPE
   pip install -r requirements.txt
   ```

3. **Executar o Crawler:**
   ```
   python main.py
   ```

### Contribuição:
- Contribuições são bem-vindas! Sinta-se à vontade para abrir uma issue ou enviar um pull request.

### Licença:
Ambos os projetos são licenciados sob a [MIT License](https://opensource.org/licenses/MIT).
