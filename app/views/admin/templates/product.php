<div class="container">
    <p>
        <a href="products" class="btn btn-info"><i class="fa fa-chevron-left"></i> Back to Product</a>
    </p>
    <form ng-submit="save()" class="form-horizontal" role="form">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" ng-model="product.name" placeholder="Name">
            </div>
        </div>
        <div class="form-group">
            <label for="url" class="col-sm-2 control-label">Url</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="url" ng-model="product.url" placeholder="Url">
            </div>
        </div>
        <div class="form-group">
            <label for="image" class="col-sm-2 control-label">Image</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="image" ng-model="product.image" placeholder="Image">
            </div>
        </div>
        <div class="form-group">
            <label for="price" class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="price" ng-model="product.price" placeholder="Price">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
				<div class="checkbox">
					<label>
						<input type="checkbox" ng-checked="product.active == 1" ng-model="product.active" >
						Active
					</label>
				</div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </div>
    </form>
</div>