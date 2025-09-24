# CEP API

> Uma aplicação PHP com Docker para consultar CEPs usando a API ViaCEP.

![PHP](https://img.shields.io/badge/PHP-7.4-blue)
![Docker](https://img.shields.io/badge/Docker-Ready-green)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.1.3-purple)

---

## 🔹 Descrição

Este projeto permite buscar informações de um CEP brasileiro de forma simples e rápida.  
Ele utiliza o padrão **MVC**, PHP 7.4, Bootstrap para o front-end, e Docker para facilitar a execução em qualquer ambiente.

---

## 🚀 Funcionalidades

- Consulta de CEP em tempo real via API [ViaCEP](https://viacep.com.br).  
- Estrutura MVC organizada: `controllers`, `models` e `views`.  
- Estilização com **Bootstrap 5**.  
- Container Docker para rodar a aplicação sem instalar PHP/Apache localmente.  
- Arquivo `.env` para configurar variáveis sensíveis (ex: Redis, cache).  

---

## 📂 Estrutura do Projeto

```

cep-api/
├── app/
│   ├── controllers/
│   ├── models/
│   └── views/
├── public/
│   └── css/
├── tests/
├── Dockerfile
├── docker-compose.yml
├── index.php
├── .gitignore
└── .env.example

````

---

## ⚡ Pré-requisitos

- [Docker](https://www.docker.com/get-started)  
- [Docker Compose](https://docs.docker.com/compose/install/)  

---

## 💻 Como Executar

1. Clone o repositório:

```bash
git clone https://github.com/josehenriqueprogramador/cep-api.git
cd cep-api
````

2. Crie seu arquivo `.env` baseado no `.env.example`:

```bash
cp .env.example .env
# Edite o .env se necessário
```

3. Construa a imagem Docker:

```bash
docker-compose build
```

4. Inicie o contêiner:

```bash
docker-compose up
```

5. Acesse no navegador:

```
http://localhost
```

---

## 🛠 Tecnologias Utilizadas

* **PHP 7.4**
* **Apache**
* **Bootstrap 5**
* **Docker & Docker Compose**
* **ViaCEP API**

---

## ✨ Observações

* O arquivo `.env` **não está incluído** no repositório por segurança.
* Use `.env.example` como referência para configurar variáveis locais.
* Os testes estão na pasta `tests/` e podem ser executados com PHPUnit.

---

## 📄 Licença

Este projeto é **open-source** e pode ser usado livremente.
