<?php $__env->startSection('menu'); ?>
<header class="tittle">
    <h1>Calendario</h1>
    <hr>
</header>
    <div class="body">
        <main class="contenedor">
            <section class="mes">
                <div class="calendar_prev" id="prev-month">&#9664;</div>
                <div class="calendar_month" id="month">Marzo</div>
                <div class="calendar_year" id="year">2023</div>
                <div class="calendar_next" id="next-month">&#9654;</div>
            </section>
            <section class="dias">
                <div class="dias_item ">Lunes</div>
                <div class="dias_item ">Martes</div>
                <div class="dias_item ">Miercoles</div>
                <div class="dias_item ">Jueves</div>
                <div class="dias_item ">Viernes</div>
                <div class="dias_item ">Sabado</div>
                <div class="dias_item ">Domingo</div>
            </section>
            <section class="calendar">
                <div class="calendario_dia">1</div>
                <div class="calendario_dia">2</div>
                <div class="calendario_dia">3</div>
                <div class="calendario_dia">4</div>
                <div class="calendario_dia">5</div>
                <div class="calendario_dia">6</div>
                <div class="calendario_dia">7</div>
                <div class="calendario_dia">8</div>
                <div class="calendario_dia">9</div>
                <div class="calendario_dia">10</div>
                <div class="calendario_dia">11</div>
                <div class="calendario_dia">12</div>
                <div class="calendario_dia">13</div>
                <div class="calendario_dia">14</div>
                <div class="calendario_dia">15</div>
                <div class="calendario_dia">16</div>
                <div class="calendario_dia">17</div>
                <div class="calendario_dia">18</div>
                <div class="calendario_dia">19</div>
                <div class="calendario_dia">20</div>
                <div class="calendario_dia">21</div>
                <div class="calendario_dia">22</div>
                <div class="calendario_dia">23</div>
                <div class="calendario_dia">24</div>
                <div class="calendario_dia">25</div>
                <div class="calendario_dia">26</div>
                <div class="calendario_dia">27</div>
                <div class="calendario_dia">28</div>
                <div class="calendario_dia">29</div>
                <div class="calendario_dia">30</div>
                <div class="calendario_dia">31</div>
            </section>
        </main>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/calendar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/normalize.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cante\OneDrive\Escritorio\Proyecto\INVENTARIO-INFO1170\Proyecto\resources\views/paginas/calendario.blade.php ENDPATH**/ ?>