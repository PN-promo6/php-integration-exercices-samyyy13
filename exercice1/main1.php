<div class="container">
  <div class="row">
    <div class="col-lg-5 col-md-6 col-sm-8 mx-auto">
      <div class="card my-5">
        <h5 class="card-header bg-primary text-white">
          Todo List
        </h5>
        <div class="card-body">
          <div class="input-group mb-3">
            <input type="text" id="search" class="form-control" placeholder="Search todo">
            <div class="input-group-append">
              <span class="input-group-text"> <i class="fas fa-search"></i> </span>
            </div>
          </div>
          <ul class="list-group mb-3">
            <li class="list-group-item">
              <i class="far fa-square done-icon"></i>
              <i class="far fa-check-square done-icon"></i>
              <span class="todo-text">It's a dummy todo item</span>
              <i class="far fa-trash-alt"></i>
            </li>
            <li class="list-group-item done">
              <i class="far fa-square done-icon"></i>
              <i class="far fa-check-square done-icon"></i>
              <span class="todo-text">This task is complete</span>
              <i class="far fa-trash-alt"></i>
            </li>
            <li class="list-group-item">
              <i class="far fa-square done-icon"></i>
              <i class="far fa-check-square done-icon"></i>
              <span class="todo-text">Here is another item</span>
              <i class="far fa-trash-alt"></i>
            </li>
          </ul>
          <button id="clearBtn" type="button" class="btn btn-dark btn-sm">Clear All</button>
        </div>
        <div class="card-footer">
          <form id="form">
            <div class="input-group">
              <input type="text" class="form-control" id="todo" placeholder="Add new todo item">
              <div class="input-group-append">
                <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Add
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
