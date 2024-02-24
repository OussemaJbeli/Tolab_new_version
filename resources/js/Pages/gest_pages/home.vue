<template>
    <GestLayoutuser>
       <header class="header" data-header>
       <div class="container">
   
         <div class="overlay" data-overlay></div>
   
         <a href="#" class="logo">
           طلاب
           <span class="tolab-icon"><i class="fa-solid fa-graduation-cap fa-lg"></i></span>
         </a>
   
         <button class="menu-open-btn" data-menu-open-btn>
            <i class="fa-solid fa-bars"></i>
         </button>
   
         <nav class="navbar_home" data-navbar>
   
           <button class="menu-close-btn" data-menu-close-btn>
            <i class="fa-solid fa-xmark p-2"></i>
           </button>
   
           <a href="#" class="logo">
             طلاب
             <span class="tolab-icon"><i class="fa-solid fa-graduation-cap fa-lg"></i></span>
           </a>
   
           <ul class="navbar_home-list">
   
             <li>
               <a href="#hero" class="navbar_home-link">الرئيسية</a>
             </li>
   
             <li>
               <a href="#about" class="navbar_home-link">من نحن؟</a>
             </li>
   
             <li>
               <a href="#departments" class="navbar_home-link">محتوانا            </a>
             </li>
   
             <li>
               <a href="#payment" class="navbar_home-link">عروضنا            </a>
             </li>
   
             <li>
               <a href="#footer" class="navbar_home-link">تواصل معنا</a>
             </li>
   
           </ul>
   
           <div class="buttons">
             <button class="btn btn-secondary" @click="open_login_frame_fun()">تسجيل الدخول</button>
             <Link class="btn btn-secondary2" :href="route('register_student')">انضم الينا</Link>
           </div>
   
         </nav>
   
       </div>
       </header>
   
       <main>
       <article>
   
         <section class="hero" id="hero">
           <div class="container">
   
             <figure class="hero-banner">
               <img src="/img/home_images/hero-banner.png" alt="A young lady sits, holding a pen and a notebook.">
             </figure>
   
             <div class="hero-content">
   
               <h2 class="h2 hero-title">
                 <p>طلاب</p>
                 المنصّة التعليميّة الأولى
                 عبر الإنترنت في دولة الامارات
               </h2>
               <p class="section-text">
                 تمتع الآن بدروس دعم عبر الإنترنت في جميع المواد وعلى مختلف المستويات (الابتدائي والأساسي والثانوي)، ابتداءً من السنة الاولى إلى الثانية عشر
               </p>
   
               <Link class="btn btn-primary w-36" :href="route('register_student')">ابدأ الآن</Link>
               
             </div>
   
           </div>
         </section>
   
         <section class="about" id="about">
           <div class="container">
   
             <figure class="about-banner">

               <img src="/img/home_images/about-banner.png" alt="Eduland students" class="about-img">
   
               <img src="/img/home_images/about-vector.svg" alt="Vector line art" class="vector-line">
   
               <button class="play-btn">
                <i class="fa-solid fa-play"></i>
               </button>
   
             </figure>
   
             <div class="about-content">
   
               <h2 class="h2 about-title">ماهي منصّة طلاب ؟</h2>
   
               <p class="section-text">
                 طلاب هي أوّل منصّة تعليميّة عبر الإنترنت في دولة الامارات موجّهة لطلاب الابتدائي والأساسي والثّانوي، نقدّم دروس دعم على شكل فيديوهات مسجّلة لشرح كلّ دروس البرنامج الدّراسي تحت إشراف مجموعة من الأساتذة والمربّين من ذوي الخبرة من كامل أنحاء الدولة.
               </p>
               
               <Link class="btn btn-primary  w-36" :href="route('register_student')">ابدأ الآن</Link>
   
             </div>
   
           </div>
         </section>
   
         <section class="departments" id="departments">
           <div class="container">
   
             <img src="/img/home_images/departmets-vector.svg" alt="Vector line art" class="vector-line">
   
             <h2 class="h2 departments-title">ماذا نقدّم ؟</h2>
   
             <ul class="departments-list">
   
               <li>
                 <div class="departments-card">
   
                   <a href="#" class="card-banner">
                     <figure>
                       <img src="/img/home_images/cours.jpg" alt="Artificial Intelligence">
                     </figure>
                   </a>
   
                   <p class="card-text">
                     فيديوهات شرح الدروس
                   </p>
                 </div>
               </li>
   
               <li>
                 <div class="departments-card">
   
                   <a href="#" class="card-banner">
                     <figure>
                       <img src="/img/home_images/resumé.jpg" alt="Civil Engineering">
                     </figure>
                   </a>
                   <p class="card-text">
                     تلخيص الدروس
                   </p>
   
                 </div>
               </li>
   
               <li>
                 <div class="departments-card">
   
                   <a href="#" class="card-banner">
                     <figure>
                       <img src="/img/home_images/exercices.png" alt="Business Studies">
                     </figure>
                   </a>
   
                   <p class="card-text">
                     تمارين مرفقة بالإصلاح
                   </p>
   
                 </div>
               </li>
   
             </ul>
   
             <Link class="btn btn-primary w-36" :href="route('register_student')">ابدأ الآن</Link>
   
           </div>
         </section>
   
   
         <section class="instructor" id="instructor">
           <div class="container">
   
             <img src="/img/home_images/instructor-vactor-1.svg" alt="Vector line art" class="vector-line">
   
             <div class="title-wrapper">
               <h2 class="h3 instructor-title">من يمكنه الاستفادة من منصّة طلاب</h2>
   
               <Link class="btn btn-primary w-36" :href="route('register_student')">ابدأ الآن</Link>
   
             </div>
   
             <ul class="instructor-list">
   
               <li>
                 <div class="instructor-card">
   
                   <figure class="card-banner">
                     <img src="/img/home_images/master.png" alt="Sellina">
                   </figure>
   
                   <a href="#">
                     <h3 class="card-title">الاساتذة/المعلمين</h3>
                   </a>
   
                   <p class="card-subtitle">ابق على تواصل دائم مع تلامذتك وانقل نشاطك التعليميّ إلى المنصّة لتساهم في تقديم أفضل بيئة تعليميّة رقميّة للتلاميذ</p>
   
   
                 </div>
               </li>
   
               <li>
                 <div class="instructor-card">
   
                   <figure class="card-banner">
                     <img src="/img/home_images/student.png" alt="John Smith">
                   </figure>
   
                   <a href="#">
                     <h3 class="card-title">التلاميذ/الطلبة</h3>
                   </a>
   
                   <p class="card-subtitle">ابدأ مراجعتك وتمتّع بأفضل محتوى دعم عن بعد و ابق على تواصل مع أساتذتك و معلّميك في المنصّة دون تكاليف باهظة</p>
   
                 </div>
               </li>
   
             </ul>
   
             <img src="/img/home_images//instructor-vactor-2.svg" alt="Vector line art" class="vector-line">
   
           </div>
         </section>
   
         <section class="cta">
           <div class="container">
   
             <div class="title-wrapper">
   
               <h2 class="h2 cta-title">
                 <span>ابدأ طريقك نحو النجاح</span>
   
                 <img src="/img/home_images/cta-vector.svg" alt="Vector arrow art" class="vector-line">
               </h2>
   
               <Link class="btn btn-primary w-36" :href="route('register_student')">ابدأ الآن</Link>
   
             </div>
   
             <div class="cta-banner">
              <img src="img/home_images/cta-banner.png" alt="">
             </div>
   
           </div>
         </section>
   
         <section class="departments" id="payment">
           <div class="container">
   
             <img src="/img/home_images/departmets-vector.svg" alt="Vector line art" class="vector-line">
   
             <h2 class="h3 departments-title">تمتّع بأفضل محتوى تعليمي وبدعم متواصل طيلة السّنة الدراسية من خلال مختلف عروضنا.</h2>

            <div class="payment_plan_frame">
              <div class="payment_plan_panel">
                <ul class="list_nav">
                  <li class="list1" @click="allclasses_fun" v-if="payments_plan_all[0]">جميع الصفوف</li>
                  <li class="list1" @click="class1_fun" v-if="payments_plan_class1[0]">الاول</li>
                  <li class="list1" @click="class2_fun" v-if="payments_plan_class2[0]">الثاني</li>
                  <li class="list1" @click="class3_fun" v-if="payments_plan_class3[0]">الثالث</li>
                  <li class="list1" @click="class4_fun" v-if="payments_plan_class4[0]">الرابع</li>
                  <li class="list1" @click="class5_fun" v-if="payments_plan_class5[0]">الخامس</li>
                  <li class="list1" @click="class6_fun" v-if="payments_plan_class6[0]">السادس</li>
                  <li class="list1" @click="class7_fun" v-if="payments_plan_class7[0]">السابع</li>
                  <li class="list1" @click="class8_fun" v-if="payments_plan_class8[0]">الثامن</li>
                  <li class="list1" @click="class9_fun" v-if="payments_plan_class9[0]">التاسع</li>
                  <li class="list1" @click="class10_fun" v-if="payments_plan_class10[0]">العاشر</li>
                  <li class="list1" @click="class11_fun" v-if="payments_plan_class11[0]">الحادي عشر</li>
                  <li class="list1" @click="class12_fun" v-if="payments_plan_class12[0]">الثاني عشر</li>
                </ul>
                <body>
                  <div class="payment_plans">
                        <div class="dont_plane" v-if="dont_have_plans">
                            <div class="h4 text-yellow-500">لا يوجد خطط دفع</div>
                        </div>
                        <div class="card_plane" v-if="allclasses">
                          <div class="plan" v-for="payment in payments_plan_all">
                              <div class="inner1" v-if="payment.frame == 'المثال الاول'">
                                      <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                      </span>
                                      <p class="title">{{payment.name}}</p>
                                      <p class="info">{{payment.description}}</p>
                                      <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                      </ul>
                                      <div class="action">
                                          <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                          </div>
                                      </div>
                              </div>
                              <div class="inner2" v-else-if="payment.frame == 'المثال الثاني'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                              <div class="inner3" v-else-if="payment.frame == 'المثال الثالث'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                          </div>
                      </div>
                      <div class="card_plane" v-if="class1">
                          <div class="plan" v-for="payment in payments_plan_class1" >
                              <div class="inner1" v-if="payment.frame == 'المثال الاول'">
                                      <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                      </span>
                                      <p class="title">{{payment.name}}</p>
                                      <p class="info">{{payment.description}}</p>
                                      <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                      </ul>
                                      <div class="action">
                                          <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                          </div>
                                      </div>
                              </div>
                              <div class="inner2" v-else-if="payment.frame == 'المثال الثاني'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                              <div class="inner3" v-else-if="payment.frame == 'المثال الثالث'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                          </div>
                      </div>
                      <div class="card_plane" v-if="class2">
                          <div class="plan"  v-for="payment in payments_plan_class2" >
                              <div class="inner1" v-if="payment.frame == 'المثال الاول'">
                                      <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                      </span>
                                      <p class="title">{{payment.name}}</p>
                                      <p class="info">{{payment.description}}</p>
                                      <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                      </ul>
                                      <div class="action">
                                          <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                          </div>
                                      </div>
                              </div>
                              <div class="inner2" v-else-if="payment.frame == 'المثال الثاني'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                              <div class="inner3" v-else-if="payment.frame == 'المثال الثالث'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                          </div>
                      </div>
                      <div class="card_plane" v-if="class3">
                          <div class="plan"  v-for="payment in payments_plan_class3" >
                              <div class="inner1" v-if="payment.frame == 'المثال الاول'">
                                      <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                      </span>
                                      <p class="title">{{payment.name}}</p>
                                      <p class="info">{{payment.description}}</p>
                                      <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                      </ul>
                                      <div class="action">
                                          <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                          </div>
                                      </div>
                              </div>
                              <div class="inner2" v-else-if="payment.frame == 'المثال الثاني'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                              <div class="inner3" v-else-if="payment.frame == 'المثال الثالث'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                          </div>
                      </div>
                      <div class="card_plane" v-if="class4">
                          <div class="plan" v-for="payment in payments_plan_class4">
                              <div class="inner1" v-if="payment.frame == 'المثال الاول'">
                                      <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                      </span>
                                      <p class="title">{{payment.name}}</p>
                                      <p class="info">{{payment.description}}</p>
                                      <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                      </ul>
                                      <div class="action">
                                          <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                          </div>
                                      </div>
                              </div>
                              <div class="inner2" v-else-if="payment.frame == 'المثال الثاني'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                              <div class="inner3" v-else-if="payment.frame == 'المثال الثالث'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                          </div>
                      </div>
                      <div class="card_plane" v-if="class5">
                          <div class="plan"  v-for="payment in payments_plan_class5">
                              <div class="inner1" v-if="payment.frame == 'المثال الاول'">
                                      <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                      </span>
                                      <p class="title">{{payment.name}}</p>
                                      <p class="info">{{payment.description}}</p>
                                      <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                      </ul>
                                      <div class="action">
                                          <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                          </div>
                                      </div>
                              </div>
                              <div class="inner2" v-else-if="payment.frame == 'المثال الثاني'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                              <div class="inner3" v-else-if="payment.frame == 'المثال الثالث'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                          </div>
                      </div>
                      <div class="card_plane" v-if="class6">
                          <div class="plan" v-for="payment in payments_plan_class6">
                              <div class="inner1" v-if="payment.frame == 'المثال الاول'">
                                      <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                      </span>
                                      <p class="title">{{payment.name}}</p>
                                      <p class="info">{{payment.description}}</p>
                                      <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                      </ul>
                                      <div class="action">
                                          <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                          </div>
                                      </div>
                              </div>
                              <div class="inner2" v-else-if="payment.frame == 'المثال الثاني'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                              <div class="inner3" v-else-if="payment.frame == 'المثال الثالث'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                          </div>
                      </div>
                      <div class="card_plane" v-if="class7">
                          <div class="plan"  v-for="payment in payments_plan_class7">
                              <div class="inner1" v-if="payment.frame == 'المثال الاول'">
                                      <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                      </span>
                                      <p class="title">{{payment.name}}</p>
                                      <p class="info">{{payment.description}}</p>
                                      <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                      </ul>
                                      <div class="action">
                                          <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                          </div>
                                      </div>
                              </div>
                              <div class="inner2" v-else-if="payment.frame == 'المثال الثاني'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                              <div class="inner3" v-else-if="payment.frame == 'المثال الثالث'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                          </div>
                      </div>
                      <div class="card_plane" v-if="class8">
                          <div class="plan" v-for="payment in payments_plan_class8">
                              <div class="inner1" v-if="payment.frame == 'المثال الاول'">
                                      <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                      </span>
                                      <p class="title">{{payment.name}}</p>
                                      <p class="info">{{payment.description}}</p>
                                      <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                      </ul>
                                      <div class="action">
                                          <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                          </div>
                                      </div>
                              </div>
                              <div class="inner2" v-else-if="payment.frame == 'المثال الثاني'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                              <div class="inner3" v-else-if="payment.frame == 'المثال الثالث'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                          </div>
                      </div>
                      <div class="card_plane" v-if="class9">
                          <div class="plan"  v-for="payment in payments_plan_class9">
                              <div class="inner1" v-if="payment.frame == 'المثال الاول'">
                                      <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                      </span>
                                      <p class="title">{{payment.name}}</p>
                                      <p class="info">{{payment.description}}</p>
                                      <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                      </ul>
                                      <div class="action">
                                          <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                          </div>
                                      </div>
                              </div>
                              <div class="inner2" v-else-if="payment.frame == 'المثال الثاني'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                              <div class="inner3" v-else-if="payment.frame == 'المثال الثالث'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                          </div>
                      </div>
                      <div class="card_plane" v-if="class10">
                          <div class="plan"  v-for="payment in payments_plan_class10">
                              <div class="inner1" v-if="payment.frame == 'المثال الاول'">
                                      <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                      </span>
                                      <p class="title">{{payment.name}}</p>
                                      <p class="info">{{payment.description}}</p>
                                      <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                      </ul>
                                      <div class="action">
                                          <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                          </div>
                                      </div>
                              </div>
                              <div class="inner2" v-else-if="payment.frame == 'المثال الثاني'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                              <div class="inner3" v-else-if="payment.frame == 'المثال الثالث'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                          </div>
                      </div>
                      <div class="card_plane" v-if="class11">
                          <div class="plan"  v-for="payment in payments_plan_class11">
                              <div class="inner1" v-if="payment.frame == 'المثال الاول'">
                                      <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                      </span>
                                      <p class="title">{{payment.name}}</p>
                                      <p class="info">{{payment.description}}</p>
                                      <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                      </ul>
                                      <div class="action">
                                          <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                          </div>
                                      </div>
                              </div>
                              <div class="inner2" v-else-if="payment.frame == 'المثال الثاني'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                              <div class="inner3" v-else-if="payment.frame == 'المثال الثالث'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                          </div>
                      </div>
                      <div class="card_plane" v-if="class12">
                          <div class="plan"  v-for="payment in payments_plan_class12">
                              <div class="inner1" v-if="payment.frame == 'المثال الاول'">
                                      <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                      </span>
                                      <p class="title">{{payment.name}}</p>
                                      <p class="info">{{payment.description}}</p>
                                      <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                      </ul>
                                      <div class="action">
                                          <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                          </div>
                                      </div>
                              </div>
                              <div class="inner2" v-else-if="payment.frame == 'المثال الثاني'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                              <div class="inner3" v-else-if="payment.frame == 'المثال الثالث'">
                                  <span class="pricing">
                                          <span>
                                              {{payment.Price}} AED <small>/{{payment.frequency}}</small>
                                          </span>
                                          </span>
                                          <p class="title">{{payment.name}}</p>
                                          <p class="info">{{payment.description}}</p>
                                          <ul class="features">
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>{{payment.education_level}}</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>فتح كل الفيديوهات والقنوات</span>
                                              </li>
                                              <li>
                                                  <span class="icon">
                                                  <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                                      <path fill="currentColor" d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z"></path>
                                                  </svg>
                                                  </span>
                                                  <span>قوائم التشغيل والاتعليقات</span>
                                              </li>
                                          </ul>
                                          <div class="action">
                                              <div  @click="open_register_frame_fun()" class="button cursor-pointer">
                                              اشترك الآن
                                              </div>
                                          </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </body>
              </div>
            </div>

             <Link class="btn btn-primary" :href="route('register_student')">ابدأ الآن</Link>
   
           </div>
         </section>
   
       </article>
       </main>
     
       <footer class="footer" id="footer">
   
       <div class="footer-top">
         <div class="container">
   
           <div class="footer-brand">
   
             <a href="#" class="logo">
               طلاب
               <span class="tolab-icon"><i class="fa-solid fa-graduation-cap fa-lg"></i></span>
             </a>
   
             <p class="footer-text">
               ابدأ طريقك نحو النجاح          </p>
   
             <ul class="social-list">
   
               <li>
                 <a href="#" class="social-link">
                  <i class="fa-brands fa-google"></i>
                 </a>
               </li>
   
               <li>
                 <a href="#" class="social-link">
                  <i class="fa-brands fa-x-twitter"></i>
                 </a>
               </li>
   
               <li>
                 <a href="#" class="social-link">
                  <i class="fa-brands fa-instagram"></i>
                 </a>
               </li>
   
               <li>
                 <a href="#" class="social-link">
                  <i class="fa-brands fa-linkedin"></i>
                 </a>
               </li>
   
             </ul>
   
           </div>
   
         </div>
       </div>
   
       <div class="footer-bottom">
         <div class="container">
           <p class="copyright">
             &copy; 2024 <a href="">طلاب</a>.  
             جميع الحقوق محفوظة
           </p>
         </div>
       </div>
   
       </footer>
   
       <a href="#top" class="go-top" data-go-top>
          <i class="fa-solid fa-arrow-up"></i>
        </a>

        <div class="bluer_bg" v-if="open_login_frame">
            <div class="logo"></div>
            <div class="h2 desc1">تسجيل الدخول</div>
            <div class="h3 desc2">لديك الخيار بين حساب استاذ أو طالب.</div>
            <div class="cards">
                <Link class="card" :href="route('login_master')">
                    <div class="content">
                        <div class="back">
                        <div class="back-content">
                            <svg data-name="Layer 1" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M233.25 271.88a5.1 5.1 0 0 0-5.1-5.1H62.28V36.38H425.4v52.07a5.1 5.1 0 0 0 10.2 0V31.28a5.1 5.1 0 0 0-5.1-5.1H57.18a5.11 5.11 0 0 0-5.1 5.1v240.6a5.1 5.1 0 0 0 5.1 5.1h171a5.1 5.1 0 0 0 5.07-5.1Z" fill="#ffffff" class="fill-000000"></path><path d="M431.38 202.64a40.89 40.89 0 1 0-45.7 0 53.61 53.61 0 0 0-27.92 23.13L340.54 255l-39.14-29.68a20.82 20.82 0 0 0-25.68 32.76l56.1 45.4a17.58 17.58 0 0 0 25.65-3.87l20.15-29.9V319a5.1 5.1 0 1 0 10.2 0v-66a5.1 5.1 0 0 0-9.33-2.85L349 293.92a7.38 7.38 0 0 1-10.77 1.63l-56.1-45.4a10.62 10.62 0 0 1 13.1-16.7l43.7 33.18a5.1 5.1 0 0 0 7.48-1.48l20.14-34.22a43.37 43.37 0 0 1 37.24-21.3h10.87a35.08 35.08 0 0 1 35.05 35V319a5.1 5.1 0 0 0 10.2 0v-74.3a45.3 45.3 0 0 0-28.53-42.06Zm-53.53-33.9a30.69 30.69 0 1 1 30.68 30.69 30.71 30.71 0 0 1-30.68-30.69ZM398.89 418.38a37.6 37.6 0 1 0-42.62 0 66.26 66.26 0 0 0-39.48 36.93 66.23 66.23 0 0 0-39.48-36.93 37.6 37.6 0 1 0-42.62 0 66.29 66.29 0 0 0-39.48 36.93 66.23 66.23 0 0 0-39.48-36.93 37.61 37.61 0 1 0-42.61 0 66 66 0 0 0-44.58 62.34 5.1 5.1 0 0 0 10.2 0 55.69 55.69 0 1 1 111.37 0 5.1 5.1 0 0 0 10.2 0 55.69 55.69 0 0 1 111.38 0 5.1 5.1 0 1 0 10.2 0 55.69 55.69 0 1 1 111.37 0 5.1 5.1 0 1 0 10.2 0 66 66 0 0 0-44.57-62.34ZM107 387.43a27.41 27.41 0 1 1 27.41 27.4 27.44 27.44 0 0 1-27.41-27.4Zm121.58 0a27.4 27.4 0 1 1 27.4 27.4 27.43 27.43 0 0 1-27.38-27.4Zm121.58 0a27.4 27.4 0 1 1 27.4 27.4 27.43 27.43 0 0 1-27.38-27.4ZM304.92 132.63a24.51 24.51 0 0 0-24.49-24.49h-25.35a5.1 5.1 0 0 0-5.1 5.1v77.56a5.1 5.1 0 0 0 5.1 5.1h25.35a24.49 24.49 0 0 0 14.95-43.9 24.47 24.47 0 0 0 9.54-19.37Zm-24.49 53.07h-20.25v-28.58h20.25a14.29 14.29 0 1 1 0 28.58Zm0-38.78h-20.25v-28.58h20.25a14.29 14.29 0 1 1 0 28.58ZM129.26 109.51a5.11 5.11 0 0 0-4.81 3.41l-27.34 77.57a5.1 5.1 0 0 0 9.63 3.39l5.88-16.71h33.28l5.89 16.71a5.11 5.11 0 0 0 4.81 3.4 5 5 0 0 0 1.69-.29 5.09 5.09 0 0 0 3.12-6.5l-27.34-77.57a5.11 5.11 0 0 0-4.81-3.41Zm-13 57.46 2.22-6.31L129.26 130l13.05 37ZM201.46 181.74a5.1 5.1 0 0 0 5.1-5.1v-20h20a5.1 5.1 0 0 0 0-10.2h-20v-20a5.1 5.1 0 0 0-10.2 0v20h-20a5.1 5.1 0 0 0 0 10.2h20v20a5.1 5.1 0 0 0 5.1 5.1Z" fill="#ffffff" class="fill-000000"></path></svg>                            
                            <strong>استاذ</strong>
                        </div>
                        </div>
                        <div class="front">
                        
                        <div class="img">
                            <div class="circle">
                            </div>
                            <div class="circle" id="right">
                            </div>
                            <div class="circle" id="bottom">
                            </div>
                        </div>

                        <div class="front-content">
                            <small class="badge">استاذ</small>
                            <div class="description">
                            <div class="title">
                                <p class="title">
                                <strong>حساب استاذ</strong>
                                </p>
                                <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997"><g transform="scale(8,8)"><path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path></g></g></svg>
                            </div>
                            <p class="card-footer">
                                ابق على تواصل دائم مع تلامذتك وانقل نشاطك التعليميّ إلى المنصّة عن طريق انشاء قنات ورفع فيديوهات تعليميّة
                            </p>
                            </div>
                        </div>
                        </div>
                    </div>
                </Link>
                <Link class="card" :href="route('login_student')">
                    <div class="content">
                        <div class="back">
                        <div class="back-content">
                            <svg data-name="Layer 1" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M450.08 247.82A70.14 70.14 0 0 0 418.49 115h-1.33V96.71A24.76 24.76 0 0 0 392.42 72H29.23A24.76 24.76 0 0 0 4.49 96.71v237.94a24.76 24.76 0 0 0 24.74 24.73H158v70.44h-42.21a5.1 5.1 0 0 0 0 10.2H348.3a32.47 32.47 0 0 0 32.44-32.44v-81.2a5.1 5.1 0 1 0-10.2 0v81.2a22.26 22.26 0 0 1-22.24 22.24H244.4a35.56 35.56 0 0 1 35.13-30.4h52.2a5.1 5.1 0 0 0 5.1-5.1v-38.77a5.32 5.32 0 0 0 .16-1.27 5.24 5.24 0 0 0-.16-1.26v-30.31a67.42 67.42 0 0 1 67.34-67.34H430a67.42 67.42 0 0 1 67.34 67.34v112.21a5.1 5.1 0 1 0 10.2 0V322.71a77.68 77.68 0 0 0-57.46-74.89Zm28.37-62.61a60 60 0 1 1-60-60 60 60 0 0 1 60 60ZM14.69 334.65v-11.53h311.94v26.06H29.23a14.54 14.54 0 0 1-14.54-14.53Zm101.1-117.21a27.76 27.76 0 1 1 27.75-27.76 27.79 27.79 0 0 1-27.75 27.76Zm9.52 10.2c15.24 0 28.8 5.54 38.33 15.76l26.2 25.92a5 5 0 0 0 3.84 1.47 5.09 5.09 0 0 0 3.67-1.84l28.53-34.5a7 7 0 0 1 9.58-1.06 6.93 6.93 0 0 1 1.34 10l-38.42 47.57a7.29 7.29 0 0 1-10.72.69l-26.29-25.16a5.09 5.09 0 0 0-8.62 3.68v42.77h-80.5v-52.7a32.64 32.64 0 0 1 32.61-32.6Zm42.87 202.18v-70.44h68.33v59a5.38 5.38 0 0 0 .09.9 45.19 45.19 0 0 0-2.47 10.55Zm111.35-40.6a45.57 45.57 0 0 0-32.82 13.95v-43.79h79.92v29.84Zm47.72-76.3H163V282.1l17.6 16.9a17.37 17.37 0 0 0 13.21 4.81 17.54 17.54 0 0 0 12.5-6.46l38.43-47.57a17.09 17.09 0 0 0-2.08-23.65L267.22 172a5.1 5.1 0 1 0-9.28-4.21l-24.56 54.11A17.14 17.14 0 0 0 218 228l-25 30.2-22-21.91A59.14 59.14 0 0 0 139.89 219a38 38 0 1 0-47.72.38 42.87 42.87 0 0 0-30.12 40.88v52.68H14.69V96.71a14.55 14.55 0 0 1 14.54-14.53h363.19A14.55 14.55 0 0 1 407 96.71V116a70.13 70.13 0 0 0-21 131.33 77.73 77.73 0 0 0-58.75 65.59Z" fill="#ffffff" class="fill-000000"></path><path d="M336.64 110.35H201a5.1 5.1 0 0 0 0 10.2h135.64a5.1 5.1 0 1 0 0-10.2ZM336.64 138.46H317a5.1 5.1 0 0 0 0 10.2h19.6a5.1 5.1 0 1 0 0-10.2ZM286 143.56a5.1 5.1 0 0 0-5.1-5.1H201a5.1 5.1 0 0 0 0 10.2h79.9a5.1 5.1 0 0 0 5.1-5.1ZM336.64 166.57h-49.73a5.1 5.1 0 0 0 0 10.2h49.73a5.1 5.1 0 1 0 0-10.2ZM238.93 166.57H201a5.1 5.1 0 1 0 0 10.2h37.94a5.1 5.1 0 0 0 0-10.2Z" fill="#ffffff" class="fill-000000"></path></svg>
                            <strong>طالب</strong>
                        </div>
                        </div>
                        <div class="front">
                        
                        <div class="img">
                            <div class="circle">
                            </div>
                            <div class="circle" id="right">
                            </div>
                            <div class="circle" id="bottom">
                            </div>
                        </div>

                        <div class="front-content">
                            <small class="badge">طالب</small>
                            <div class="description">
                            <div class="title">
                                <p class="title">
                                <strong>حساب الطالب</strong>
                                </p>
                                <svg fill-rule="nonzero" height="15px" width="15px" viewBox="0,0,256,256" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g style="mix-blend-mode: normal" text-anchor="none" font-size="none" font-weight="none" font-family="none" stroke-dashoffset="0" stroke-dasharray="" stroke-miterlimit="10" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1" stroke="none" fill-rule="nonzero" fill="#20c997"><g transform="scale(8,8)"><path d="M25,27l-9,-6.75l-9,6.75v-23h18z"></path></g></g></svg>
                            </div>
                            <p class="card-footer">
                                يمكّن حساب الطالب التلاميذ من متابعة الدروس اليوميّة مثل فيديوهات تفسير الدروس والحصص المباشرة.
                            </p>
                            </div>
                        </div>
                        </div>
                    </div>
                </Link>
            </div>
            <div class="reteurn" @click="open_login_frame_fun()">
                الرجوع إلى الصفحة الرئيسية
            </div>
        </div>
    </GestLayoutuser>
</template>
<script setup>
   import { ref } from 'vue';
   import GestLayoutuser from '@/Layouts/gestLayoutuser.vue';
   import { Head, Link, useForm } from '@inertiajs/vue3';
</script>
<script>
   export default {
       components: {
           Head,
           Link,
       },
       props: {
        payments_plan_all: Object,
        payments_plan_class1 : Object,
        payments_plan_class2 : Object,
        payments_plan_class3 : Object,
        payments_plan_class4 : Object,
        payments_plan_class5 : Object,
        payments_plan_class6 : Object,
        payments_plan_class7 : Object,
        payments_plan_class8 : Object,
        payments_plan_class9 : Object,
        payments_plan_class10 : Object,
        payments_plan_class11 : Object,
        payments_plan_class12 : Object,
       },
       data() {
           return {
                open_login_frame: false,
                allclasses: false,
                class1: false,
                class2: false,
                class3: false,
                class4: false,
                class5: false,
                class6: false,
                class7: false,
                class8: false,
                class9: false,
                class10: false,
                class11: false,
                class12: false,
                dont_have_plans: false,
           }
       },
       methods: {
            open_login_frame_fun(){
               this.open_login_frame ? 
                   this.open_login_frame=false : 
                   this.open_login_frame=true;
            },
            allclasses_fun(){
                    this.allclasses=true;
                    this.class1=false ;
                    this.class2=false ;
                    this.class3=false ;
                    this.class4=false ;
                    this.class5=false ;
                    this.class6=false ;
                    this.class7=false ;
                    this.class8=false ;
                    this.class9=false ;
                    this.class10=false ;
                    this.class11=false ;
                    this.class12=false ;
            },
            class1_fun(){
                    this.allclasses=false;
                    this.class1=true;
                    this.class2=false ;
                    this.class3=false ;
                    this.class4=false ;
                    this.class5=false ;
                    this.class6=false ;
                    this.class7=false ;
                    this.class8=false ;
                    this.class9=false ;
                    this.class10=false ;
                    this.class11=false ;
                    this.class12=false ;
            },
            class2_fun(){
                    this.allclasses=false;
                    this.class1=false;
                    this.class2=true ;
                    this.class3=false ;
                    this.class4=false ;
                    this.class5=false ;
                    this.class6=false ;
                    this.class7=false ;
                    this.class8=false ;
                    this.class9=false ;
                    this.class10=false ;
                    this.class11=false ;
                    this.class12=false ;
            },
            class3_fun(){
                    this.allclasses=false;
                    this.class1=false;
                    this.class2=false ;
                    this.class3=true ;
                    this.class4=false ;
                    this.class5=false ;
                    this.class6=false ;
                    this.class7=false ;
                    this.class8=false ;
                    this.class9=false ;
                    this.class10=false ;
                    this.class11=false ;
                    this.class12=false ;
            },
            class4_fun(){
                    this.allclasses=false;
                    this.class1=false;
                    this.class2=false ;
                    this.class3=false ;
                    this.class4=true ;
                    this.class5=false ;
                    this.class6=false ;
                    this.class7=false ;
                    this.class8=false ;
                    this.class9=false ;
                    this.class10=false ;
                    this.class11=false ;
                    this.class12=false ;
            },
            class5_fun(){
                    this.allclasses=false;
                    this.class1=false;
                    this.class2=false ;
                    this.class3=false ;
                    this.class4=false ;
                    this.class5=true ;
                    this.class6=false ;
                    this.class7=false ;
                    this.class8=false ;
                    this.class9=false ;
                    this.class10=false ;
                    this.class11=false ;
                    this.class12=false ;
            },
            class6_fun(){
                    this.allclasses=false;
                    this.class1=false;
                    this.class2=false ;
                    this.class3=false ;
                    this.class4=false ;
                    this.class5=false ;
                    this.class6=true ;
                    this.class7=false ;
                    this.class8=false ;
                    this.class9=false ;
                    this.class10=false ;
                    this.class11=false ;
                    this.class12=false ;
            },
            class7_fun(){
                    this.allclasses=false;
                    this.class1=false;
                    this.class2=false ;
                    this.class3=false ;
                    this.class4=false ;
                    this.class5=false ;
                    this.class6=false ;
                    this.class7=true ;
                    this.class8=false ;
                    this.class9=false ;
                    this.class10=false ;
                    this.class11=false ;
                    this.class12=false ;
            },
            class8_fun(){
                    this.allclasses=false;
                    this.class1=false;
                    this.class2=false ;
                    this.class3=false ;
                    this.class4=false ;
                    this.class5=false ;
                    this.class6=false ;
                    this.class7=false ;
                    this.class8=true ;
                    this.class9=false ;
                    this.class10=false ;
                    this.class11=false ;
                    this.class12=false ;
            },
            class9_fun(){
                    this.allclasses=false;
                    this.class1=false;
                    this.class2=false ;
                    this.class3=false ;
                    this.class4=false ;
                    this.class5=false ;
                    this.class6=false ;
                    this.class7=false ;
                    this.class8=false ;
                    this.class9=true ;
                    this.class10=false ;
                    this.class11=false ;
                    this.class12=false ;
            },
            class10_fun(){
                    this.allclasses=false;
                    this.class1=false;
                    this.class2=false ;
                    this.class3=false ;
                    this.class4=false ;
                    this.class5=false ;
                    this.class6=false ;
                    this.class7=false ;
                    this.class8=false ;
                    this.class9=false ;
                    this.class10=true ;
                    this.class11=false ;
                    this.class12=false ;
            },
            class11_fun(){
                    this.allclasses=false;
                    this.class1=false;
                    this.class2=false ;
                    this.class3=false ;
                    this.class4=false ;
                    this.class5=false ;
                    this.class6=false ;
                    this.class7=false ;
                    this.class8=false ;
                    this.class9=false ;
                    this.class10=false ;
                    this.class11=true ;
                    this.class12=false ;
            },
            class12_fun(){
                    this.allclasses=false;
                    this.class1=false;
                    this.class2=false ;
                    this.class3=false ;
                    this.class4=false ;
                    this.class5=false ;
                    this.class6=false ;
                    this.class7=false ;
                    this.class8=false ;
                    this.class9=false ;
                    this.class10=false ;
                    this.class11=false ;
                    this.class12=true ;
            },
       },
       computed: {
           filteredItems() {
               const query = this.searchQuery.toLowerCase();
               return this.$page.props.videos_chanel_target.filter(video_serach => video_serach.name.toLowerCase().includes(query));
           }
       },
       mounted() {
            if(this.payments_plan_all[0])
                this.allclasses=true;
            else if(this.payments_plan_class1[0])
                this.class1=true;
            else if(this.payments_plan_class2[0])
                this.class2=true;
            else if(this.payments_plan_class3[0])
                this.class3=true;
            else if(this.payments_plan_class4[0])
                this.class4=true;
            else if(this.payments_plan_class5[0])
                this.class5=true;
            else if(this.payments_plan_class6[0])
                this.class6=true;
            else if(this.payments_plan_class7[0])
                this.class7=true;
            else if(this.payments_plan_class8[0])
                this.class8=true;
            else if(this.payments_plan_class9[0])
                this.class9=true;
            else if(this.payments_plan_class10[0])
                this.class10=true;
            else if(this.payments_plan_class11[0])
                this.class11=true;
            else if(this.payments_plan_class12[0])
                this.class12=true;
            else
                this.dont_have_plans=true;

            // Your JavaScript code goes here
            const navOpenBtn = document.querySelector("[data-menu-open-btn]");
            const navCloseBtn = document.querySelector("[data-menu-close-btn]");
            const navbar = document.querySelector("[data-navbar]");
            const overlay = document.querySelector("[data-overlay]");
            const header = document.querySelector("[data-header]");
            const goTopBtn = document.querySelector("[data-go-top]");

            const navElemArr = [navOpenBtn, navCloseBtn, overlay];

            navElemArr.forEach((element) => {
            element.addEventListener("click", () => {
                navbar.classList.toggle("active");
                overlay.classList.toggle("active");
            });
            });

            window.addEventListener("scroll", () => {
            window.scrollY >= 20
                ? header.classList.add("active")
                : header.classList.remove("active");
            });

            window.addEventListener("scroll", () => {
            window.scrollY >= 800
                ? goTopBtn.classList.add("active")
                : goTopBtn.classList.remove("active");
            });
        },
   }
   </script>
   