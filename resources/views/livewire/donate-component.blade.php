<div>
    <form>
        <!-- <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div> -->
        <div class="form-group">
          <label for="exampleFormControlSelect1">1. Select a Residence</label>
          <select class="form-control" id="exampleFormControlSelect1" required>
            <option>-- select a residence--</option>
            <option>Booth Residence</option>
            <option>McPhail Residence</option>
            <option>MacLaren Residence</option>
            <option>Princeton Residence</option>
          </select>
        </div>
        <!-- <div class="form-group">
          <label for="exampleFormControlSelect2">Example multiple select</label>
          <select multiple class="form-control" id="exampleFormControlSelect2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div> -->
        <div class="form-group mb-3">
          <label for="exampleFormControlTextarea1">2. Item(s) donated</label>
          <textarea class="form-control" required id="exampleFormControlTextarea1" required placeholder="Example:Toothpaste 10, toaster 3 ..." rows="10"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="exampleFormControlInput1">3. When could you deliver the item(s) to our location?</label>
            <input type="date" required class="form-control" id="exampleFormControlInput1">
        </div>
        <label>4. Donor Informations</label>
        <div class="form-group row mb-3" >
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" required class="form-control" id="inputEmail3" placeholder="John Doe">
            </div>
        </div>
        <div class="form-group row mb-3" >
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" required class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Phone number</label>
            <div class="col-sm-10">
              <input type="tel" required class="form-control" id="inputPassword3" placeholder="te:+125346788">
            </div>
        </div>
        <button type="submit button" class="btn btn-primary">Submit</button>
      </form>
</div>
