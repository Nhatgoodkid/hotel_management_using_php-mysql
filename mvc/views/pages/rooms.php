<div class="background_table">
    <div class="header_table">
        <div>
            <h1 class="mb-4">Rooms</h1>
            <div class="alert alert-success tool_notification"></div>

            <div class="d-flex justify-content-between">
                <div class="filter_table py-0 d-flex">
                    <input type="text" class="search_table border border-secondary border-1">
                    <div class="btn_search btn btn-info">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </div>

                    <div class="dropdown open ml-3">
                        <button class="btn btn-lg btn-primary dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Show
                        </button>
                        <div class="dropdown-menu" aria-labelledby="triggerId">
                            <a class="dropdown-item" href="/Admin/Rooms/0"></a>
                            <a class="dropdown-item" href="/Admin/Rooms/">4-6</a>
                            <a class="dropdown-item" href="/Admin/Rooms/">7-9</a>

                        </div>
                    </div>
                </div>

                <div class="add_Room">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addNewModal">
                        Add new
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="addNewModal" tabindex="-1" role="dialog" aria-labelledby="addNewModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title text-success" id="addNewModalLabel">Add a new room</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body px-5 my-4">
                                    <form class="formModal" method="post">
                                        <div>
                                            <label for="nameRoom">Name room:</label>
                                            <input type="text" name="nameRoom" id="nameRoom">

                                            <label for="kind">Kind:</label>
                                            <input type="text" name="kind" id="kind">

                                            <label for="rating">Rating:</label>
                                            <input type="text" name="rating" id="rating">

                                            <label for="id_location">Id_location:</label>
                                            <input type="text" name="id_location" id="id_location">

                                            <label for="adult">Adult:</label>
                                            <input type="text" name="adult" id="adult">

                                            <label for="children">Children:</label>
                                            <input type="text" name="children" id="children">

                                            <label for="bedroom">Bedroom:</label>
                                            <input type="text" name="bedroom" id="bedroom">

                                            <label for="bathroom">Bathroom:</label>
                                            <input type="text" name="bathroom" id="bathroom">

                                            <label for="image">Image:</label>
                                            <input type="text" name="image" id="image">
                                            
                                            <div>
                                            <label for="description">Description:</label>
                                            <textarea name="description" id="description" cols="30" rows="4"></textarea>
                                            </div>

                                            <label for="price">Price:</label>
                                            <input type="text" name="price" id="price">

                                            <label for="status">Status:</label>
                                            <select id="status" name="status">
                                                <option value="Available">Available</option>
                                                <option value="Unavailable">Unavailable</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer mt-4">
                                        <input id="btnInsertRoom" type="submit" value="Add" name="btnInsertRoom" class="btn btn-primary btn-lg w-100" data-dismiss="modal">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="body_table overflow-auto">
        <div class="">
            <table class=" table-striped table_rooms
            table-hover	
            table-borderless">
                <thead class="table-secondary">
                    <tr>
                        <th>#</th>
                        <th>Name Room</th>
                        <th>Kind</th>
                        <th>Rating</th>
                        <th>Id_location</th>
                        <th>Adult</th>
                        <th>Children</th>
                        <th>Bedroom</th>
                        <th>Bathroom</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider" id="bodyRooms">
                    
                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>

    </div>
</div>

<!-- The Delete Modal -->
<div class="modal fade" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete confirmation</h4>
        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Are you sure delete ?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success btn-lg" data-dismiss="modal" onclick="deleteRoom()"> Yes, delete </button>
      </div>

    </div>
  </div>
</div>
