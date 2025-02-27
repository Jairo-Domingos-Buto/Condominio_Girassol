# Sistema de Gestão de Residentes e Visitas do Condomínio Girassol

## 📋 Descrição do Projeto

O **Sistema de Gestão de Residentes e Visitas do Condomínio Girassol** é uma solução moderna e eficiente para o gerenciamento de acessos, segurança e comunicação em condomínios residenciais. O sistema foi projetado para oferecer uma interface intuitiva, recursos robustos e garantir a organização e tranquilidade para todos os usuários.

---

## ⚙️ Funcionalidades Principais

### **Módulo de Administradores**
- Gerenciamento de moradores, visitantes e seguranças.
- Emissão de relatórios detalhados.
- Controle de permissões de acesso.

### **Módulo de Moradores/Residentes**
1. **Cadastro e Gerenciamento de Perfil**:
   - Cadastro inicial com dados pessoais.
   - Atualização e edição de informações.
   - Visualização do status da conta e histórico de acessos.

2. **Registro e Gerenciamento de Visitantes**:
   - Cadastro e geração de autorizações de visita.
   - Configuração de visitas recorrentes.
   - Gerenciamento da lista de visitantes.

3. **Monitoramento de Entradas e Saídas**:
   - Histórico de visitas com exportação de relatórios.

4. **Notificações e Alertas**:
   - Notificações em tempo real sobre check-ins e tentativas de acesso.

5. **Solicitações e Comunicação**:
   - Envio de solicitações para a administração.
   - Visualização de avisos e comunicados.

### **Módulo de Visitantes**
- Check-in digital com QR Code ou autorização.
- Validação rápida de dados para entrada no condomínio.

### **Módulo de Segurança**
- Controle de acessos em tempo real.
- Visualização do histórico de visitantes.
- Comunicação direta com a administração.

---

## 🛠️ Tecnologias Utilizadas

### **Front-end**
- HTML, CSS, JavaScript
- Framework: React
- Estilização: TailwindCSS

### **Back-end**
- PHP com Laravel

### **Banco de Dados**
- MySQL

---

## 🚀 Como Executar o Projeto

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/nome-do-repositorio.git
   ```

2. Navegue até o diretório do projeto:
   ```bash
   cd nome-do-repositorio
   ```

3. Instale as dependências do back-end:
   ```bash
   composer install
   ```

4. Instale as dependências do front-end:
   ```bash
   npm install
   ```

5. Configure o arquivo `.env` com as variáveis de ambiente (exemplo incluído no repositório).

6. Execute as migrações do banco de dados:
   ```bash
   php artisan migrate
   ```

7. Inicie o servidor local:
   ```bash
   php artisan serve
   ```

8. Inicie o front-end:
   ```bash
   npm run dev
   ```

---

## 🗂️ Estrutura do Projeto

```plaintext
/
├── public/          # Arquivos públicos (imagens, scripts, etc.)
├── resources/       # Arquivos do front-end (views, CSS, JS)
├── routes/          # Arquivos de rotas do Laravel
├── database/        # Migrações e seeds
├── app/             # Arquivos principais do back-end (controladores, modelos)
└── ...
```

---

## 📚 Documentação

A documentação completa do sistema está disponível no diretório `/docs` do repositório.

---

## 👨‍💻 Contribuição

Contribuições são bem-vindas! Para contribuir, siga os passos:

1. Faça um fork do projeto.
2. Crie uma branch para sua feature:
   ```bash
   git checkout -b feature/minha-feature
   ```
3. Commit suas alterações:
   ```bash
   git commit -m 'Adiciona minha feature'
   ```
4. Envie para a branch principal:
   ```bash
   git push origin feature/minha-feature
   ```
5. Abra um Pull Request.

---

## 🛡️ Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

---

## 📝 Autor

Desenvolvido por **Jairo Domingos Buto**,  **Nsambu Carlos Augusto**.. Para mais informações ou dúvidas, entre em contato através do [LinkedIn](https://www.linkedin.com/in/jairo-domingos-buto) ou [GitHub](https://github.com/seu-usuario).
