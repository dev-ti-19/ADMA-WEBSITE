var positions = [2, 3];
var buttons = document.getElementById("buttons");
for (pos of positions) {
  buttons.innerHTML += `<li class="page-item ">
         <a class="page-link" href="#galeria${pos}"data-toggle="tab" role="tablist">${pos}</a>
       </li>`;
}

var images = [1, 2, 3,4,5,6,7,8,9];
var gallery = document.getElementById("gallery");
for (image of images) {
  gallery.innerHTML += ` 
        <div class="card card-pin">
            <a href="#" data-toggle="modal" data-target="#id${image}">
                <img src="assets/img/portfolio/${image}.jpg" alt="" class="card-img-top" >
                <div class="overlay">
                    <h3 class="card-title title">Some Title</h3>
                    <div class="more">
                    <a href="#!">
                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                    </a>
                    </div>
                </div>
            </a>
        </div>`;
}

var images = [10,11,12,13,14, 15, 16,17,18,19];
var gallery2 = document.getElementById("gallery2");
for (image of images) {
  gallery2.innerHTML += ` 
                  <div class="card">
                      <a href="#" data-toggle="modal" data-target="#id${image}">
                          <img src="assets/img/portfolio/${image}.jpg" alt="" class="card-img-top" >
                      </a>
                  </div>
                 `;
}
var images = [20,21,22,23,24,25];
var gallery3 = document.getElementById("gallery3");
for (image of images) {
  gallery3.innerHTML += ` 
                           <div class="card">
                               <a href="#" data-toggle="modal" data-target="#id${image}">
                                   <img src="assets/img/portfolio/${image}.jpg" alt="" class="card-img-top" >
                               </a>
                           </div>
                           `;
}
