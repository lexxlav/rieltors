<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
include ("my_templates/my_template.php");
?>
<div id="page2">
    <!-- -->
      <div class="row-fluid blue_block">
     <div class="container">
       <div class="row-fluid header">
          <div class="span2 logo_banner">
             
          </div>
          <div class="span5">
            <div class="row-fluid big_blue_label">РИЭЛТОРСКИЕ УСЛУГИ</div>
            <div class="row-fluid little_white_label">Мария Николаевна Андреева</div>
          </div>
          <div class="span1 mail_block">
            <div class="mail_icon">

            </div>
            <div class="mail_icon2">

            </div>
            <!-- phone icon-->  
          </div>
          <div class="span4 bold">
             <p>8(937)379-88-08</p>
             <p><a class="white_link" href="mailto:373026@mail.ru">373026@mail.ru</a></p>
          </div> 
         </div>
       </div>   
     </div>
   </div> 

    <!-- -->
<!-- end of header -->
   <div class="row-fluid room_background">
    <div class="container">
     <div class="row-fluid horror_women">
         <div class="span6 horror_women_bg">
           <div class="from2005">
             
           </div>
         </div>
         <div class="span6">
           <div class="row-fluid horror_women_text">
             <p>Добрый день!</p>
             <p>Меня зовут Мария.</p>
             <p>Я - консультант по недвижимости</p>
             <p>для Вас и Вашей семьи.</p>
           </div>
           <div class="row-fluid">
              <div class="grey_text_banner">Оставьте заявку на <strong>бесплатную</strong> консультацию</div>
              <div class="webform"><?php print render($page['webform']); ?></div>
           </div>

         </div>
     </div>
    </div>
   </div> 
<!-- -->
 

  <div id="main">
  <!-- -->

  <!-- -->
  
<div class="container white_block">
   <?php if(arg(0)=="autorization" || arg(0)=="user"){print render($page['content']);}?> 
  <div class="row-fluid">
    <div class="big_blue_text">ЭКОНОМЬТЕ ВРЕМЯ, НЕРВЫ И ДЕНЬГИ - ОБРАЩАЙТЕСЬ КО МНЕ!</div>
    </div>
  <div class="row-fluid">
    <div class="span3 left_img">
    </div>
    <div class="span6 first_block">
       <p>Воспользовавшись моими услугами, Вы выигрываете.</p> 
       <p>В конечном итоге от сотрудничества со мной Вы получите либо квартиру о которой могли только мечтать, 
либо Вы получите хорошие деньги от выгодной продажи.</p>
<p>На западе уже давно существует практика, когда клиент ничего сам не ищет и не покупает, за него все делает его доверенный человек, 
который затем работает с заказчиками на протяжении всей жизни.
У меня аналогичный подход.</p>
<p>Я нацелена с Вами работать долгие годы. Сейчас Вы покупаете квартиру, затем рано или поздно Вы купите квартиру своим детям. В нелегком деле приобретения и продажи квартиры
есть много подводных камней, о которых знает не каждый.</p>
<p>Если Вы действительно хотите сэкономить свои нервы, время и деньги, обращайтесь ко мне.</p>
    </div>
    <div class="span3 right_img">
    </div>

  </div>
</div>

<!-- -->

<!-- -->
<div class="row-fluid room_background2">
 <div class="alpha">
  <div class="container">
   <a name="etap"></a>
   <div class="row-fluid block_text">
     <div class="big_blue_text">Этапы нашего с вами сотрудничества</div>
     <div class="silver_text">Если Вы хотите купить квартиру</div>
     <img class="center_img" src="/sites/all/themes/zen/STARTERKIT/images/pokupka.png">
     <div class="row-fluid text_left">
       <div class="span1"></div>
       <div class="span2">Оставьте заявку на сайте</div>
       <div class="span2">Первая ознакомительная встреча</div>
       <div class="span2">Договор на сотрудничество</div>
       <div class="span2">Рассмотрение вариантов</div>
       <div class="span2">Оформление желаемой квартиры</div>
     
     </div>
   
    <div class="silver_text margin_top">Если Вы хотите продать квартиру</div>
     <img class="center_img" src="/sites/all/themes/zen/STARTERKIT/images/prodazha.png">
     <div class="row-fluid text_left">
       <div class="span1"></div>
       <div class="span2">Оставьте заявку на сайте</div>
       <div class="span2">Первая ознакомительная встреча</div>
       <div class="span2">Договор на сотрудничество</div>
       <div class="span2">Я ищу покупателя для Вас</div>
       <div class="span2">Удачная продажа квартиры</div>


    </div>
   </div>
  </div> 
 </div>

 <!--- -->
<div class="row-fluid">
   <div class="container block_text text_left">
     <div class="row-fluid">
     <a name="price"></a>
       <div class="big_blue_text">Сколько стоят мои услуги?</div>
     </div>
     <div class="row-fluid">
       <div class="span1"></div>
       <div class="span6 black_text not_bold text_left margin_top line_heigth ">Фактическая стоимость услуг обговаривается при личной встрече. Здесь представлена приблизительная смета.</div>
       <div class="span5">
         <div class="row-fluid img_center little_blue_label">
             Посмотрите прайс, чтобы узнать расценки
         </div>
         <div class="strelka_img">
              
         </div>
       
       <div class="row-fluid">
         <form class="form-horizontal formula-form">
         
          <div class="input_form">
              
              <button type="submit" class="btn-danger" id="formula">ПРАЙС-ЛИСТ</button>
            </div>
         
        </form>
        </div>
       </div>
       <div class="span1"></div>
     </div>
   </div>
  </div>
<!-- -->
 <div class="row-fluid blue_block2">
     <div class="container">
        <div class="row-fluid">
          <div class="span1"></div>
          <div class="span6 big_white_text">Гарантировано работаю с Вами до получения документов из регистрационной палаты</div>
          <div class="span4 with_webform"> <div class="webform"><?php print render($page['webform2']); ?></div></div>
          <div class="span1"></div>
          </div>
        </div>
 </div>
   
<!-- -->

<a name="sert"></a>
<div class="container">
   <div class="row-fluid">
       <div class="big_blue_text margin_top50">Сертификаты</div>
     </div>
   <div class="row-fluid">
     <div class="slider6">
       <div class="slide">
           
          <a href="#inn" data-toggle="modal"><img src="/sites/all/themes/zen/STARTERKIT/images/sert/mini-inn.jpg"></a>
          <div class="slide_block"><div class="slide_text">Свидетельство о постановке на учет в налоговом органе</div> 
          </div>
        
       </div>
       <div class="slide">
          <a href="#kv-attestat" data-toggle="modal">
          <img src="/sites/all/themes/zen/STARTERKIT/images/sert/mini-kv_attestat.jpg">
          </a>
          <div class="slide_block"><div class="slide_text">Квалификационный аттестат риэлтора</div> 
        </div>
       </div>
       <div class="slide">
          <a href="#ogrnip" data-toggle="modal">
          <img src="/sites/all/themes/zen/STARTERKIT/images/sert/mini-ogrnip.jpg">
          </a>
          <div class="slide_block"><div class="slide_text">Свидетельство о регистрации ИП</div> 
         </div> 
       </div>
       <div class="slide">
          <a href="#sert-ok-obuch" data-toggle="modal">
          <img src="/sites/all/themes/zen/STARTERKIT/images/sert/mini-sert-obuch.jpg">
          </a>
          <div class="slide_block"><div class="slide_text">Сертификат об окончании обучения</div> 
        </div>
       </div>
       <div class="slide">
          <a href="#sert-sb" data-toggle="modal">
          <img src="/sites/all/themes/zen/STARTERKIT/images/sert/mini-sert-sb.jpg">
          </a>
          <div class="slide_block"><div class="slide_text">Сертификат обучения Сбербанк России</div> 
        </div>
       </div>
       <div class="slide">
          <a href="#svid" data-toggle="modal"> 
          <img src="/sites/all/themes/zen/STARTERKIT/images/sert/mini-svid.jpg">
          </a>
          <div class="slide_block"><div class="slide_text">Свидетельстов "Технология активных продаж в риэлторском бизнесе"</div> 
        </div>
       </div>
       <div class="slide">
          <a href="#svid-reg" data-toggle="modal"> 
          <img src="/sites/all/themes/zen/STARTERKIT/images/sert/mini-svid_reg.jpg">
          </a>
          <div class="slide_block"><div class="slide_text">Свидетельство "Гос.регистрация прав на недвижимое имущество и сделок с ним"</div> 
        </div>
       </div>
       <div class="slide">
         <a href="#svid-upr" data-toggle="modal"> 
          <img src="/sites/all/themes/zen/STARTERKIT/images/sert/mini-svid_upr.jpg">
         </a>
          <div class="slide_block"><div class="slide_text">Свидетельство "Управление и стратегия развития риэлторской компании"</div> 
        </div>
       </div>
       <div class="slide">
        <a href="#svid-uch" data-toggle="modal">
          <img src="/sites/all/themes/zen/STARTERKIT/images/sert/mini-svid-uch.jpg">
        </a>  
          <div class="slide_block"><div class="slide_text">Свидетельство участия в семинаре Михаила Гороховского "Путь успеха риэлтора"</div> 
        </div>
       </div>
     </div>

   </div>




   <a name="otz"></a>
   <div class="row-fluid">
       <div class="big_blue_text margin_top50">Отзывы</div>
   </div>
   <div class="row-fluid">
       
       
       
         <!-- sliders -->
         <div class="big_sl graditudes_slide_block">
          <div class="slider1">
           <div class="slide">
             <div class="row-fluid m_b">
               <div class="span3">
                 <div class="row-fluid gradituder_img">
                 <!-- photo -->
                 <img src="/sites/all/themes/zen/STARTERKIT/images/a-boiko.png">
                 </div>
                 <div class="row-fluid gradituder_author_text">
                     Андрей Бойко - предприниматель
                 </div>
               </div>
               <div class="span9 gradituders_text">
                  <p>Лично мне  с риэлтором повезло когда покупал квартиру ))</p>
                  <p>Долго выбирал и смотрел, потом нудно просил звонить тем кто много хочет, потом говорил что куплю если 
                  сбавят цену, в результате моя риэлтор все сделала, замечательно торговалась,
                  а потом оперативненько (уже для меня) нашла тех кто снимет уже мою квартирку!</p>
               </div>
             </div>
           </div>

           <div class="slide">
             <div class="row-fluid m_b">
             <!--  <div class="span3">
                 <div class="row-fluid gradituder_img">
                 <!-- photo -->
             <!--    <img src="/sites/all/themes/zen/STARTERKIT/images/a-boiko.png">
                 </div>
                 <div class="row-fluid gradituder_author_text">
                     Андрей Бойко - предприниматель
                 </div>
               </div>-->
               <div class="span1"></div>
               <div class="span10 gradituders_text">
                  <p>Здравствуйте!</p>
                  <p>«Нужно довольно долго подумать, чтобы принять быстрое решение»- говорили мудрые люди. </p>
                  <p>Я, наверное, из тех, которая  очень долго думает…но к быстрому решению не может прийти. Мне нужен был такой человек, который помог бы мне принять быстрое решение…</p>
                <p>А моим надежным другом и советчиком стала  Мария Николаевна.</p>
                <p>Я 13 лет с сыном жила в поселке Вурнары. Хотя стремилась жить в городе Чебоксары. Очень долго думала, но не знала с чего начать. </p>
                <p>Помог мне в этом случай, когда я встретила своего одноклассника Алексея возле центрального рынка в Чебоксарах. Он поинтересовался, где я живу и почему в город не переезжаю, так как в городе возможностей больше, чем в поселке. Когда я рассказала о своей нерешительности, он дал мне телефон  Марии, так как она работает риэлтором. Я  не задумываясь, сразу же позвонила  к ней. Мария Николаевна назначила мне встречу.</p>
                <p>С первой же встречи я поняла, как она добросовестно выполняет  свою работу. Она обладает  большим опытом работы и большими практическими знаниями, чтобы успешно довести дело до конца.  Имеет  хорошие знания по своей специальности, решать все  вопросы, касающиеся своей работы. Умеет составить и проверить необходимую документацию. Грамотно планирует  работу. Заметно, что она любит  свою работу, так как к своей работе относится  добросовестно. Имеет  деловые качества. Может  быстро разобраться в сути вопроса и выделить главное. Работает, не считаясь с личным временем, столько, сколько требуют интересы дела. Действует настойчиво и упорно, не останавливается, пока не доведет дело до конца или не разберется в каком-либо вопросе. Умеет  располагать к себе людей и находить с ними общий язык. </p>
                <p>Благодаря Марии Николаевне за короткий срок мы успели и продать квартиру в поселке Вурнары, и купить квартиру в новом доме в Чебоксарах! На протяжении всего времени сотрудничества  она вдохновляла и поддерживала меня.</p>
                <p>Мы с сыном благодарим Марию Николаевну за решение нашего квартирного вопроса и желаем  ей дальнейших успехов в нелегкой работе, счастья, здоровья, всего самого- самого!</p>
                <p></p>
                <p><strong><right>Светлана и Стас Сидюхины.</right></strong></p>
               </div>
               <div class="span1"></div>
             </div>
           </div>

            <div class="slide">
             <div class="row-fluid m_b">
             <!--  <div class="span3">
                 <div class="row-fluid gradituder_img">
                 <!-- photo -->
             <!--    <img src="/sites/all/themes/zen/STARTERKIT/images/a-boiko.png">
                 </div>
                 <div class="row-fluid gradituder_author_text">
                     Андрей Бойко - предприниматель
                 </div>
               </div>-->
               <div class="span1"></div>
               <div class="span10 gradituders_text">
                 <p>В ноябре 2013 года я решила продать 3-х комнатную квартиру в Чебоксарах в связи с переездом в другой город. Знакомые порекомендовали обратиться к Андреевой Марии Николаевне , так как года два назад они сами через нее продавали-покупали квартиру, и остались всем довольны. Сразу хочется выделить профессионализм и деловую хватку Марии. Всю сделку она вела от начала до конца - размещение рекламного объявления в интернете, проведения показов квартиры потенциальным покупателям, присутствовала при подписании документов в банке и регистрационной палате, подробно отвечала на все мои вопросы, которых у меня было очень много, так как сделку с недвижимостью я совершала впервые в жизни. В итоге уже в середине декабря мы завершили куплю-продажу моей квартиры, и я получила деньги. Еще раз хочу выразить огромную благодарность Марии за профессионализм в работе, порядочность и отзывчивость!!!</p> 
                 <p><strong><right>С уважением Ольга Радченко.</right></strong></p>

               </div>
               <div class="span1"></div>
             </div>
           </div>

             <div class="slide">
             <div class="row-fluid m_b">
             <!--  <div class="span3">
                 <div class="row-fluid gradituder_img">
                 <!-- photo -->
             <!--    <img src="/sites/all/themes/zen/STARTERKIT/images/a-boiko.png">
                 </div>
                 <div class="row-fluid gradituder_author_text">
                     Андрей Бойко - предприниматель
                 </div>
               </div>-->
               <div class="span1"></div>
               <div class="span10 gradituders_text">
                 <p>Я, Краснова Н.В., хочу поделиться впечатлениями от взаимодействия  с Марией Николаевной Андреевой.</p>
                 <p>Когда я собралась приобрести свое первое жилье в 2006 году, мне посоветовали обратиться к Андреевой Марии Николаевне. Мне ее посоветовали мои родственники, т.к. они уже имели опыт работы с Марией Николаевной и они были очень довольны с результатом.</p>
                 <p>Кто  с ней один раз работал, то в следующий раз без раздумья обращаются только к ней. Мария Николаевна к каждому клиента находит индивидуальный подход, и ни считаясь с личным временем, полностью погружается в любимое дело. </p>
                 <p>Я с первых же дней работы с Марией Николаевной поняла, что она является профессионалом своего дела. Мария Николаевна очень вежлива, юридически очень грамотна. Долгое время она работает на рынке недвижимости и многим жителям городов Чебоксары и Новочебоксарск помогла приобрести свое жилье. Например, я знаю, что многим моим знакомым и родным помогла в  решении жилищного вопроса и не один раз. </p>
                 <p>Приведу такой пример:</p>
                 <p>В нашей семье Красновых 3 брата. Благодаря Марии Николаевне у каждого сейчас имеется свое собственное жилье. Мы все не один раз обращались к ней за помощью при выборе жилищного помещения, т.к. в течение нескольких лет мы расширяли свою жилищную площадь.</p>
                 <p>У нас у всех осталось очень хорошее впечатление от работы с Марией Николаевной. И мы все ей очень благодарны за сотрудничество и помощь!</p>

               </div>
               <div class="span1"></div>
             </div>
           </div>


          

         <!-- -->
     </div>
    </div> 
     
       
   </div>

</div>

<!-- -->

<div class="row-fluid grey_background">
  <div class="container">
     <div class="row-fluid">
       <div class="span1"></div>
       <div class="span5">
          <div class="row-fluid question">ОСТАЛИСЬ ВОПРОСЫ?</div>
          <div class="row-fluid white_number">8 (937) 379-88-08</div>
       </div>
       <div class="span5">
          <div class="row-fluid little_white_text">Позвоните или закажите обратный звонок!</div>
          <div class="row-fluid"> <form class="form-phone">      
              <button type="submit" class="btn-danger margin_top" id="formula"  data-toggle="modal" data-target="#myModal">Заказать звонок</button>  
             
         </form></div>
       </div>
       <div class="span1"></div>
     </div>
     <div class="row-fluid silver_text">
       <div class="span1"></div>
       <div class="span2"><a href="#etap">Этапы сотрудничества</a></div>
       <div class="span2"><a href="#price">Стоимость услуг</a></div>
       <div class="span2"><a href="#sert">Сертификаты</a></div>
       <div class="span2"><a href="#otz">Отзывы</a></div>
     </div>

  </div>
</div>
<!-- -->

<div class="row-fluid black_banner">
   <div class="container">
      <div class="row-fluid margin_top10">
         <div class="span1"></div>
         <div class="span5 very_little_white_text">Copyright &copy 2014 Мария Николаевна Андреева</div>
         <div class="span1"></div>
         <div class="span4 very_little_white_text">Разработано <a href="http:\\sellingsites.pro"><img src="/sites/all/themes/zen/STARTERKIT/images/sellingsites.png"></a></div>
         <div class="span1"></div>
      </div>
   </div>
</div>
<!-- modal window-->
  <div class="modal hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 id="myModalLabel">Введите свои данные</h4>
      </div>
      <div class="modal-body">
        <?php print render($page['webform_call']); ?> 
      </div>
      <div class="modal-footer">
       <!-- <button type="submit" class="btn btn-primary on_modal_btn" id="phone_order_sbm_btn">Отправить контакты</button>-->
         <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button> 
      </div>
    </div>


<!-- -->
<?php 
if ($messages) {   
   
  echo"
      <div class='modal hide fade' id='myModal2' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
        <h3 id='myModalLabel'>Состояние отправления заявки</h3>
      </div>
      <div class='modal-body'>";
     print $messages;
       echo "   
      <div class='modal-footer'>
        <button class='btn' data-dismiss='modal' aria-hidden='true'>Закрыть</button> 
      </div>
    </div>

    <script> $('#myModal2').modal(); </script>";
}?>




  <!-- -->


 <div id="content" class="column hidden" role="main">
      
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print $feed_icons; ?>
      <?php print render($page['content']); ?>
    </div>


  </div>

</div>

<!-- -->
<?php 
$array_links = array("inn", "kv-attestat", "ogrnip","sert-ok-obuch", "sert-sb", "svid", "svid-reg","svid-upr","svid-uch");

for ($i=0;$i<9;$i++){
   echo"
      <div class='pict_modal'>
      <div class='modal hide fade' id='".$array_links[$i]."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
        <h3 id='myModalLabel'>Сертификаты</h3>
      </div>
      <div class='modal-body'>
       <img src='/sites/all/themes/zen/STARTERKIT/images/sert/".$array_links[$i].".jpg'>";
  echo "   
      <div class='modal-footer'>
        <button class='btn' data-dismiss='modal' aria-hidden='true'>Закрыть</button> 
      </div>
    </div>
    </div>
    </div>";
}

  ?>