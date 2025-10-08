 <main data-halaman-aktif="chat" x-data="{pageName: `Chat`, breadcrumbs : ['Home', 'Chat'], isMobile: false}">
     <div class="mx-auto max-w-(--breakpoint-2xl) p-4 md:p-6">
         <!-- Breadcrumb Start -->
         <div>
             <?php include './pages/partials/breadcrumb.php' ?>
         </div>
         <!-- Breadcrumb End -->

         <div
             class="h-[calc(100vh-186px)] overflow-hidden sm:h-[calc(100vh-174px)]">
             <div class="flex h-full flex-col gap-6 xl:flex-row xl:gap-5">
                 <!-- Chat Sidebar Start -->
                 <?php include './pages/partials/chat/chat-sidebar.php' ?>
                 <!-- Chat Sidebar End -->

                 <!-- Chat Box Start -->
                 <?php include './pages/partials/chat/chat-box.php' ?>
                 <!-- Chat Box End -->
             </div>
         </div>
     </div>
 </main>