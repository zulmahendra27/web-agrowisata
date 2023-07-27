<!-- Property List Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-0 gx-5 align-items-end">
      <div class="col-lg-6">
        <div class="text-start mx-auto mb-4 wow slideInLeft" data-wow-delay="0.1s">
          <h1 class="mb-0">Galeri</h1>
        </div>
      </div>
    </div>
    <div class="tab-content">
      <div id="tab-1" class="tab-pane fade show p-0 active">
        <div class="row g-4">
          <?php
          $queryGaleri = select($c, 'galeri', ['limit' => 6, 'order' => "ORDER BY id_galeri DESC"]);
          if ($queryGaleri->num_rows > 0) :
            foreach ($queryGaleri as $dataGaleri) :
          ?>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden" style="height: 240px;">
                <!-- <div class="align-self-stretch"> -->
                <img class="img-fluid w-100 h-100" style="object-fit: cover; object-position: center;"
                  src="images/<?= $dataGaleri['foto'] ?>" alt="<?= $dataGaleri['foto'] ?>">
                <!-- </div> -->
              </div>
            </div>
          </div>
          <?php endforeach;
          endif; ?>
          <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
            <a class="btn btn-primary py-3 px-5" href="?p=semua_galeri">Semua Galeri</a>
          </div>
        </div>
      </div>
      <div id="tab-2" class="tab-pane fade show p-0">
        <div class="row g-4">
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="assets/img/property-1.jpg" alt=""></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Appartment</div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i
                    class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3
                  Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="assets/img/property-2.jpg" alt=""></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Villa</div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i
                    class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3
                  Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="assets/img/property-3.jpg" alt=""></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Office</div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i
                    class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3
                  Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="assets/img/property-4.jpg" alt=""></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Building</div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i
                    class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3
                  Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="assets/img/property-5.jpg" alt=""></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Home</div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i
                    class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3
                  Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="assets/img/property-6.jpg" alt=""></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Shop</div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i
                    class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3
                  Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
              </div>
            </div>
          </div>
          <div class="col-12 text-center">
            <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
          </div>
        </div>
      </div>
      <div id="tab-3" class="tab-pane fade show p-0">
        <div class="row g-4">
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="assets/img/property-1.jpg" alt=""></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Appartment</div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i
                    class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3
                  Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="assets/img/property-2.jpg" alt=""></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Villa</div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i
                    class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3
                  Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="assets/img/property-3.jpg" alt=""></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Office</div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i
                    class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3
                  Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="assets/img/property-4.jpg" alt=""></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Building</div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i
                    class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3
                  Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="assets/img/property-5.jpg" alt=""></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Sell
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Home</div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i
                    class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3
                  Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="assets/img/property-6.jpg" alt=""></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Shop</div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i
                    class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3
                  Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
              </div>
            </div>
          </div>
          <div class="col-12 text-center">
            <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Property List End -->