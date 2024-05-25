<?php

// Limpa todos os dados da sessão
session_destroy();

// Redireciona para a página de login ou outra página
header("Location: ?app=login");
exit();
