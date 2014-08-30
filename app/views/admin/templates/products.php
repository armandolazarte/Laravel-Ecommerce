	<form class="form-inline pull-right" role="form">
        <div class="form-group">
            <label class="sr-only" for="search">Search</label>
            <input type="text" ng-model="search" class="form-control" id="search" placeholder="Search">
        </div>
    </form>
	<form class="form-inline" ng-submit="create()" role="form">
		<div class="form-group">
			<label class="sr-only" for="name">Product Name</label>
			<input type="text" ng-model="product.name" class="form-control" required id="name" placeholder="Product Name">
		</div>
		<button type="submit" class="btn btn-success">Create</button>
	</form>
    <table class="table table-striped table-hover table-condensed">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody ui-sortable="sortableOptions" ng-model="products.items">
            <tr class="list" ng-repeat="product in products.items | filter:search">
                <td>{{ product.name }}</td>
                <td>{{ product.price | currency }}</td>
                <td><img width="80" class="img-thumbnail" ng-src="{{ product.image }}" /></td>
                <td><hello-world active="{{ product.active }}"/> {{ product.active }}</td>
                <td>
                    <a class="btn btn-primary" ng-href="products/edit/{{product.id}}"><i class="fa fa-pencil-square-o"></i> Edit</a>
                    <a class="btn btn-danger" ng-click="remove(product)"><i class="fa fa-trash-o"></i> Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
