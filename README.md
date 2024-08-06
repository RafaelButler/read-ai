![Home](/public/dashboard.png)

----

## Introduction

This project aims to create a better experience for people who love to read. It is a platform where you can put your
readings, create notes and tags about your read recent books.

You can keep a conversation with AI about your readings, and it will help you to understand the book better. Create
connections about the book`s content

### Run locally

It`s a regular Laravel application with a few extra steps to run the AI model. You can run the application with
composer:

```bash
composer install
```

> You need to have composer installed in your machine


This project was written with PHP 8.3 and Laravel 11:

- [PHP 8.3](https://www.php.net/releases/8.3/en.php)
- [Laravel 11](https://laravel.com/docs/8.x)
- [LiveWire](https://livewire.laravel.com/)

---

### About conversation

To run the conversation, you need to have a secret key from OpenAI. You can create an account and get a key from
[OpenAI](https://platform.openai.com/)

After you get the key, you need to create a `.env` file in the root of the project and add the key:

```dotenv
OPENAI_SECRET_KEY=your-secret-key
```

![Home](/public/chat.png)

---

### Considerations

Feel free to change the AI model of your choice. And you can add new features to the project.

---

Made by [Rafael Butler](https://rafaelbutler.com.br)


