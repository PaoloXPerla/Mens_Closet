<?php
include "../../core/helpers/menu.php";
Menu::SideBar('Inicio');
?>
<br>
<div class="dropdown col-sd-6 float-left">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown button
    </button>

    <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
</div>

<form class="form-inline float-right col-sd-12">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  
</div>
<div class="table-responsive">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      <i class="fas fa-address-book"></i>
      </button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<!-- este es el segundo modal-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h2>Advanced Search</h2>
      <form>
          <div class="form-group">
              <label for="first-name">First name</label>
              <input type="text" class="form-control" placeholder="First name" id="first-name">
          </div>
          <div class="form-group">
              <label for="last-name">Last name</label>
              <input type="text" class="form-control" placeholder="Last name" id="last-name">
          </div>
          <div class="form-group">
              <label for="country">Country</label>
              <input type="text" class="form-control" placeholder="Country" id="country">
          </div>
          <div class="form-group">
              <label for="number">Phone number</label>
              <input type="text" class="form-control" placeholder="Phone number" id="number">
          </div>
          <div class="form-group">
              <label for="age">Age</label>
              <input type="text" class="form-control" placeholder="Age" id="age">
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" placeholder="Email" id="email">
          </div>
          <div class="form-group">
              <label for="category">Category</label>
              <input type="text" class="form-control" placeholder="Category" id="category">
          </div>
          <div class="form-group">
              <label for="education">Education</label>
              <input type="text" class="form-control" placeholder="Education" id="education">
          </div>
          <div class="form-group">
              <label>Gender</label>
              <div class="radio">
                  <label class="radio-inline">
                      <input type="radio" name="optradio">Male</label>
                  <label class="radio-inline">
                      <input type="radio" name="optradio">Female</label>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Button trigger modal 1 -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
  Agregar
</button>


<!-- Modal -->
<div class="modal fade col-sd-12-md-12-lg-12" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
        <h2>Campos Obligatorios</h2>
        <form>
            <div class="form-group">
                <label for="first-name">Nombre del producto</label>
                <input type="text" class="form-control" placeholder="First name" id="first-name">
            </div>
            <div class="form-group">
                <label for="last-name">Descripción</label>
                <input type="text" class="form-control" placeholder="Descripción" id="last-name">
            </div>
            <div class="form-group col-md-3 float-left ">
                <label for="inputZip">Cantidad</label>
                <input type="text" class="form-control" id="inputZip">  
            </div>
            <div class="form-group col-md-9 float-right">
            <label for="inputState">Marcas</label>
                <select id="inputState" class="form-control">
                    <option selected>Marcas</option>
                    <option>Abercrombie</option>
                    <option>Hollister</option>
                    <option>American Eagle</option>
                </select>
             </div>
             <div class="form-group col-md-3 float-left">
                <label for="inputZip">Precio </label>
                <input type="text" class="form-control" id="inputZip">  
            </div>
        <!-- Esta parte es para crear los radio buttons del género-->
            <fieldset class="form-group col-md-9 float-left">
                
                    <legend class="col-form-label col-sm-2 pt-0">Género</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Femenino
                            </label>
                        </div>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                            Masculino
                            </label>
                        </div>
                    
                    </div>
               
            </fieldset> 
            <div class="form-group col-md-9 float-right">
                <label for="education">Fecha de Ingreso</label>
                <input type="text" class="form-control" placeholder="Education" id="education">
                
            </div>
            <div class="form-group col-md-3 float-left">
                <label for="inputZip">Talla</label>
                <input type="text" class="form-control" id="inputZip">  
            </div>
            <div class="clearfix"></div>
            <button type="submit" class="btn btn-info btn-lg btn-responsive" id="search"> <span class="glyphicon glyphicon-search"></span> Search</button>
        </form>
    </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    


    </div>
</header>
<?php
include "../../core/helpers/footer.php";
Pie::Footer();
?>