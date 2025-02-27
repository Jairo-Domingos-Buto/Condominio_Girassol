@extends('layouts.main')

@section('title', 'Dashboard')

@section('links')
<link rel="stylesheet" href="{{asset('../css/morador/notificacoes.css')}}">

@section('content')

@section('search')

<div class="none"></div>

@endsection

<section class="container">
  <input type="text" class="search-bar" placeholder="Buscar notificações..." />

  <div class="notification-filters">
    <button class="filter-btn active">Todas</button>
    <button class="filter-btn">Não lidas</button>
    <button class="filter-btn">Segurança</button>
    <button class="filter-btn">Visitantes</button>
    <button class="filter-btn">Comunicados</button>
  </div>

  <div class="notifications-container">
    <!-- Notificação de Visitante -->
    <div class="notification-card unread visitor">
      <div class="notification-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
          <circle cx="12" cy="7" r="4"></circle>
        </svg>
      </div>
      <div class="notification-content">
        <div class="notification-title">Visita Autorizada</div>
        <div class="notification-message">
          O visitante João Silva realizou check-in às 14h
        </div>
        <div class="notification-time">Há 5 minutos</div>
      </div>
      <div class="notification-actions">
        <button class="action-btn mark-read">Marcar como lida</button>
        <button class="action-btn delete">Excluir</button>
      </div>
    </div>

    <!-- Notificação de Segurança -->
    <div class="notification-card unread security">
      <div class="notification-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
        </svg>
      </div>
      <div class="notification-content">
        <div class="notification-title">Alerta de Segurança</div>
        <div class="notification-message">
          Tentativa de acesso não autorizado detectada no portão principal
        </div>
        <div class="notification-time">Há 15 minutos</div>
      </div>
      <div class="notification-actions">
        <button class="action-btn mark-read">Marcar como lida</button>
        <button class="action-btn delete">Excluir</button>
      </div>
    </div>

    <!-- Notificação de Comunicado -->
    <div class="notification-card announcement">
      <div class="notification-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
        </svg>
      </div>
      <div class="notification-content">
        <div class="notification-title">Comunicado da Administração</div>
        <div class="notification-message">
          Manutenção programada no sistema de câmeras para amanhã às 10h
        </div>
        <div class="notification-time">Há 1 hora</div>
      </div>
      <div class="notification-actions">
        <button class="action-btn mark-read">Marcar como lida</button>
        <button class="action-btn delete">Excluir</button>
      </div>
    </div>

    <!-- Notificação de Check-out -->
    <div class="notification-card visitor">
      <div class="notification-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
          <polyline points="16 17 21 12 16 7"></polyline>
          <line x1="21" y1="12" x2="9" y2="12"></line>
        </svg>
      </div>
      <div class="notification-content">
        <div class="notification-title">Check-out Realizado</div>
        <div class="notification-message">
          O visitante Maria Santos realizou check-out às 16:30
        </div>
        <div class="notification-time">Há 2 horas</div>
      </div>
      <div class="notification-actions">
        <button class="action-btn mark-read">Marcar como lida</button>
        <button class="action-btn delete">Excluir</button>
      </div>
    </div>

    <!-- Notificação de Entrega -->
    <div class="notification-card unread visitor">
      <div class="notification-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <rect x="1" y="3" width="15" height="13"></rect>
          <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
          <circle cx="5.5" cy="18.5" r="2.5"></circle>
          <circle cx="18.5" cy="18.5" r="2.5"></circle>
        </svg>
      </div>
      <div class="notification-content">
        <div class="notification-title">Entrega Registrada</div>
        <div class="notification-message">
          Uma encomenda foi recebida na portaria em seu nome
        </div>
        <div class="notification-time">Há 3 horas</div>
      </div>
      <div class="notification-actions">
        <button class="action-btn mark-read">Marcar como lida</button>
        <button class="action-btn delete">Excluir</button>
      </div>
    </div>
  </div>
</main>

<div class="notification-popup">
  <div class="notification-title">Novo Visitante</div>
  <div class="notification-message">Maria Silva acabou de chegar.</div>
</div>

<script src={{asset('./js/morador/notificacoes.js')}}></script>
