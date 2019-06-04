var positions=[2,3];
var buttons= document.getElementById('buttons');
     for(pos of positions){
         buttons.innerHTML+=`<li class="page-item ">
         <a class="page-link" href="#galeria${pos}"data-toggle="tab" role="tablist">${pos}</a>
       </li>`
     }
  



     var images=[1,2,3];
var gallery= document.getElementById('gallery');
     for(image of images){
      
        gallery.innerHTML +=` 
        <div class="card">
            <a href="#" data-toggle="modal" data-target="#id${image}">
                <img src="assets/img/portfolio/carousel/1.${image}.jpg" alt="" class="card-img-top" >
            </a>
        </div>
        
       
        <div class="modal fade" id="id${image}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-center" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title " id="idexample">Project number #1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                
                <div class="modal-body">
               
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                              <img src="assets/img/portfolio/1.jpg" class="img-fluid rounded" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="assets/img/portfolio/carousel/1.1.jpg" class="img-fluid rounded" alt="...">
                          </div>
                          <div class="carousel-item">
                            
                            <img src="assets/img/portfolio/carousel/1.2.jpg" class="img-fluid rounded" alt="...">
                          </div>
                          <div class="carousel-item">
                             
                            <img src="assets/img/portfolio/carousel/1.3.jpg" class="img-fluid rounded" alt="...">
                          </div>
                          
                        </div>
                      </div>
              
              </div>
                
              
            </div>
            </div>
        </div>`

          
          }
          
          var images=[4,5,6];
          var gallery2= document.getElementById('gallery2');
               for(image of images){
                
                  gallery2.innerHTML +=` 
                  <div class="card">
                      <a href="#" data-toggle="modal" data-target="#id${image}">
                          <img src="assets/img/portfolio/carousel/2.${image-3}.jpg" alt="" class="card-img-top" >
                      </a>
                  </div>
                  
                 
                  <div class="modal fade" id="id${image}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg modal-center" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                          <h5 class="modal-title " id="idexample">Project number #1</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          </div>
                          
                          <div class="modal-body">
                         
                              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/img/portfolio/2.jpg" class="img-fluid rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                      <img src="assets/img/portfolio/carousel/2.1.jpg" class="img-fluid rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                      
                                      <img src="assets/img/portfolio/carousel/2.2.jpg" class="img-fluid rounded" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                       
                                      <img src="assets/img/portfolio/carousel/2.3.jpg" class="img-fluid rounded" alt="...">
                                    </div>
                                    
                                  </div>
                                </div>
                        
                        </div>
                          
                        
                      </div>
                      </div>
                  </div>`
          
                   }
                   var images=[7,8,9];
                   var gallery3= document.getElementById('gallery3');
                        for(image of images){
                         
                           gallery3.innerHTML +=` 
                           <div class="card">
                               <a href="#" data-toggle="modal" data-target="#id${image}">
                                   <img src="assets/img/portfolio/carousel/3.${image-6}.jpg" alt="" class="card-img-top" >
                               </a>
                           </div>
                           
                          
                           <div class="modal fade" id="id${image}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog modal-lg modal-center" role="document">
                               <div class="modal-content">
                                   <div class="modal-header">
                                   <h5 class="modal-title " id="idexample">Project number #1</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                                   </div>
                                   
                                   <div class="modal-body">
                                  
                                       <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                           <div class="carousel-inner">
                                             <div class="carousel-item active">
                                                 <img src="assets/img/portfolio/3.jpg" class="img-fluid rounded" alt="...">
                                             </div>
                                             <div class="carousel-item">
                                               <img src="assets/img/portfolio/carousel/3.1.jpg" class="img-fluid rounded" alt="...">
                                             </div>
                                             <div class="carousel-item">
                                               
                                               <img src="assets/img/portfolio/carousel/3.2.jpg" class="img-fluid rounded" alt="...">
                                             </div>
                                             <div class="carousel-item">
                                                
                                               <img src="assets/img/portfolio/carousel/3.3.jpg" class="img-fluid rounded" alt="...">
                                             </div>
                                             
                                           </div>
                                         </div>
                                 
                                 </div>
                                   
                                 
                               </div>
                               </div>
                           </div>`
                   
                            }
                        
                              
                            