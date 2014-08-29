	<form class="form-inline pull-right" role="form">
        <div class="form-group">
            <label class="sr-only" for="search">Search</label>
            <input type="text" ng-model="search" class="form-control" id="search" placeholder="Search">
        </div>
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
        <tbody>
            <tr class="list" ng-repeat="product in products | filter:search">
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
