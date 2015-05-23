    <section>
      <div class="container">

        <ul class="flowGrid" ng-flow-grid="demoGird" min-item-width="200">
          <li class="flowGridItem" ng-repeat="item in items">
              <a href=""><img ng-src="{{item.img}}"></a>
              <p>{{item.name}}</p>
          </li>
        </ul>

      </div>
    </section>