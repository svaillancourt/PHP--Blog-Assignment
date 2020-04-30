<?php
// Class declaration.
class Snack
{
  /**
   * Properties (with default values.)
   */
  // PUBLIC means it can be overwritten OUTSIDE of what's in the class methods.
  public $name  = '';
  public $price = '';
  public $type  = '';
  /**
   * Methods.
   */
  // __construct executes each time we make a new instance of this class (a new object.)
  function __construct($name = 0, $price = 'No Name', $type = 'content')
  {
    if (is_integer($name) && !empty($name))
      $this->name = $name;
    if (is_string($price) && !empty($price))
      $this->price = $price;
    if (is_string($type) && !empty($type))
      $this->type = $type;
  }
  // Outputs a snack.
  public function output($echo = TRUE)
  {
    $output = '';
    ob_start(); // Begins an output buffer.
?>
    <dl>
      <dt>ID: <?php echo $this->name; ?></dt>
      <dt>Article Topic: <?php echo $this->price; ?></dt>
      <dt>Content: <?php echo $this->type; ?></dt>
    </dl>
<?php // ob_get_clean() clears the output buffer, and returns what the string was.
    $output = ob_get_clean(); // We now have the buffered (echo'd) string contents saved in a variable.
    if ($echo === TRUE) echo $output; // Output, if our argument tells us to.
    return $output; // Return the string.
  }
}
