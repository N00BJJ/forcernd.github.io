<? 
$title = "Главная страница";
require_once 'header.php'; 
?>
<div class="slider">
            <div class="slider__wrapper">
                <div class="slider__container container">
                    <div class="slider__body">
                        <div class="wrapper__box">
                            <div id="box"></div>
                        </div>
                        
                        <div class="body-bg">
                            <div class="slider__body-list"><h1>У нас ты найдешь:</h1></div>
                                <div id="text_slide1"><h1>Кросовки</h1></div>
                                <div id="text_slide2"><h1>Лосины</h1></div>
                                <div id="text_slide3"><h1>Кепки</h1></div>
                                <div id="text_slide4"><h1>Шорты</h1></div>
                                <div id="text_slide5"><h1>Штаны</h1></div>
                        </div>
                        
                        <a href="#product-list"><button class="custom-btn btn-1">Перейти к комплектам</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="delivery-info">
            <div class="delivery-info__wrapper">
                <div class="delivery-info__container">
                    <div class="card">
                        <div class="content">
                            <h1>Бесплатная доставка по РФ и странам СНГ</h1>
                            <p>Если вы закажете у нас спортивной одежды от 3000руб</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<main class="main">
    <div class="main__wrapper">
        <div class="main__container container">
            <div class="main__body">
                <div class="ready_product">
                    <div class="product-title">Готовые комлекты для вас!</div>
                    <div class="product-list" id="product-list">
                        <div class="product-item">
                            <div id="myBtn">Подробнее</div>
                        </div>
                        <div class="product-item">
                            <div id="myBtn">Подробнее</div>
                        </div>
                        <div class="product-item">
                            <div id="myBtn">Подробнее</div>
                        </div>
                        <div class="product-item">
                            <div id="myBtn">Подробнее</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>

<div id="myModal" class="modal">

 
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <div class="product-item"></div>
    </div>
    <div class="modal-body">
      <p>Какой-то текст в теле модального окна</p>
      <p>Ещё другой текст...</p>
    </div>
    <div class="modal-footer">
      <h3>Футер модального окна</h3>
    </div>
  </div>

</div>

<!-- Подключение js -->
<script src="/js/app.js"></script>
<script src="/js/typeit.js"></script>
</body>

<? 
require_once 'footer.php';
?>