<?php
  include_once('sql.php');
  $sql = new sql();
?>

<style>
* {
  box-sizing: border-box;
}

a {
  text-decoration: none;
  color: #379937;
}

body {
  margin: 40px;
}

.dropdown {
  position: relative;
  font-size: 14px;
  color: #333;

  .dropdown-list {
    padding: 12px;
    background: #fff;
    position: absolute;
    top: 30px;
    left: 2px;
    right: 2px;
    box-shadow: 0 1px 2px 1px rgba(0, 0, 0, .15);
    transform-origin: 50% 0;
    transform: scale(1, 0);
    transition: transform .15s ease-in-out .15s;
    max-height: 66vh;
    overflow-y: scroll;
  }
  
  .dropdown-option {
    display: block;
    padding: 8px 12px;
    opacity: 0;
    transition: opacity .15s ease-in-out;
  }
  
  .dropdown-label {
    display: block;
    height: 30px;
    background: #fff;
    border: 1px solid #ccc;
    padding: 6px 12px;
    line-height: 1;
    cursor: pointer;
    
    &:before {
      content: '▼';
      float: right;
    }
  }
  
  &.on {
   .dropdown-list {
      transform: scale(1, 1);
      transition-delay: 0s;
      
      .dropdown-option {
        opacity: 1;
        transition-delay: .2s;
      }
    }
    
    .dropdown-label:before {
      content: '▲';
    }
  }
  
  [type="checkbox"] {
    position: relative;
    top: -1px;
    margin-right: 4px;
  }
}
</style>



<!doctype html>
<head>
    <title>CarePro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
</head>

<body>

    <?php
      include_once('navbar.php');
      if (isset($_COOKIE['sessionid'])) {
        $user = $sql->getCookie($_COOKIE['sessionid']);
        if ($user) {
          if (!$user['Staff']) {
          ?>
          <h1>Illnesses</h1>

  <div class="dropdown" data-control="checkbox-dropdown">
  <label class="dropdown-label">Select</label>

  <div class="dropdown-list">

      <label class="dropdown-option">
      <input type="checkbox" name="dropdown-group" value="Selection 1" />
        Alzheimer’s
      </label>

      <label class="dropdown-option">
      <input type="checkbox" name="dropdown-group" value="Selection 2" />
        Arthritis
      </label>

      <label class="dropdown-option">
      <input type="checkbox" name="dropdown-group" value="Selection 3" />
        Asperger
      </label>

      <label class="dropdown-option">
      <input type="checkbox" name="dropdown-group" value="Selection 4" />
        Blind
      </label>

      <label class="dropdown-option">
      <input type="checkbox" name="dropdown-group" value="Selection 5" />
        Cancer 
      </label>   
      
      <label class="dropdown-option">
      <input type="checkbox" name="dropdown-group" value="Selection 6" />
        Cerebral palsy 
      </label>  

      <label class="dropdown-option">
      <input type="checkbox" name="dropdown-group" value="Selection 7" />
        Deaf
      </label>  

      <label class="dropdown-option">
      <input type="checkbox" name="dropdown-group" value="Selection 8" />
        Diabetes type 1 / type 2 
      </label>  

      <label class="dropdown-option">
      <input type="checkbox" name="dropdown-group" value="Selection 9" />
        Down syndrome 
      </label>  

      <label class="dropdown-option">
      <input type="checkbox" name="dropdown-group" value="Selection 10" />
        Epilepsy 
      </label>    
  </div>

  <script>
  (function($) {
  var CheckboxDropdown = function(el) {
      var _this = this;
      this.isOpen = false;
      this.areAllChecked = false;
      this.$el = $(el);
      this.$label = this.$el.find('.dropdown-label');
      this.$checkAll = this.$el.find('[data-toggle="check-all"]').first();
      this.$inputs = this.$el.find('[type="checkbox"]');
      
      this.onCheckBox();
      
      this.$label.on('click', function(e) {
      e.preventDefault();
      _this.toggleOpen();
      });
      
      this.$checkAll.on('click', function(e) {
      e.preventDefault();
      _this.onCheckAll();
      });
      
      this.$inputs.on('change', function(e) {
      _this.onCheckBox();
      });
  };

  CheckboxDropdown.prototype.onCheckBox = function() {
      this.updateStatus();
  };

  CheckboxDropdown.prototype.updateStatus = function() {
      var checked = this.$el.find(':checked');
      
      this.areAllChecked = false;
      this.$checkAll.html('Check All');
      
      if(checked.length <= 0) {
      this.$label.html('Select Options');
      }
      else if(checked.length === 1) {
      this.$label.html(checked.parent('label').text());
      }
      else if(checked.length === this.$inputs.length) {
      this.$label.html('All Selected');
      this.areAllChecked = true;
      this.$checkAll.html('Uncheck All');
      }
      else {
      this.$label.html(checked.length + ' Selected');
      }
  };

  CheckboxDropdown.prototype.onCheckAll = function(checkAll) {
      if(!this.areAllChecked || checkAll) {
      this.areAllChecked = true;
      this.$checkAll.html('Uncheck All');
      this.$inputs.prop('checked', true);
      }
      else {
      this.areAllChecked = false;
      this.$checkAll.html('Check All');
      this.$inputs.prop('checked', false);
      }
      
      this.updateStatus();
  };

  CheckboxDropdown.prototype.toggleOpen = function(forceOpen) {
      var _this = this;
      
      if(!this.isOpen || forceOpen) {
      this.isOpen = true;
      this.$el.addClass('on');
      $(document).on('click', function(e) {
          if(!$(e.target).closest('[data-control]').length) {
          _this.toggleOpen();
          }
      });
      }
      else {
      this.isOpen = false;
      this.$el.removeClass('on');
      $(document).off('click');
      }
  };

  var checkboxesDropdowns = document.querySelectorAll('[data-control="checkbox-dropdown"]');
  for(var i = 0, length = checkboxesDropdowns.length; i < length; i++) {
      new CheckboxDropdown(checkboxesDropdowns[i]);
  }
  })(jQuery);

  </script>
      <?php
        } else {
          echo 'hello staff';
        }
      }
      } else {
        echo "<p>If you have an account please <a href='login.php'>login</a></p>";
      }

    ?>

    
</body>
</html>
