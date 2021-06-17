<?php
if (!isset($_SESSION)) {
    session_start();
}
include("php/sessionVerifier.php");
?>
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Visão Geral</li>
</ol>

<!-- Icon Cards-->
<div class="row mx-auto">
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-heartbeat"></i>
                </div>
                <div class="mr-5">Pacientes</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="index.php?page=patientRegister">
                <span class="float-left">Detalhes</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-plus-square"></i>
                </div>
                <div class="mr-5">Lesão</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="index.php?page=patientLesion">
                <span class="float-left">Detalhes</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-user-md"></i>
                </div>
                <div class="mr-5">Usuários</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Detalhes</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-medkit"></i>
                </div>
                <div class="mr-5">4</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Detalhes</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>
</div>