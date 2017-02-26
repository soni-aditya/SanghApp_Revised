<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">

   <?= $this->Html->link('मध्यप्रदेश मा. शिक्षक संघ,जबलपुर','#',['class'=>'navbar-brand','style'=>'color:#99adff']) ?>

        <button class="ml-5 navbar-toggler navbar-toggler-right" style="color:#fff" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
           <div class="navbar-toggler-icon"></div>
        </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <span class="mr-auto"></span>
        <ul class="navbar-nav">
          <li class="nav-item">
            <?= $this->Html->link('Home',['controller'=>'Dashboard','action'=>'index'],['class'=>'nav-link']) ?>
          </li>
          <li class="nav-item">
            <?= $this->Html->link('Members',['controller'=>'Members','action'=>'index'],['class'=>'nav-link']) ?>
          </li>
        </ul>
        <?= $this->Html->link('Admin Login',['controller'=>'admins','action'=>'controlBoard'],['class'=>'btn btn-outline-warning']) ?>
      </div>
</nav>
