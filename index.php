<?php 

	class tree_node {
		public $value      = "";
		public $left_node  = null;
		public $right_node = null;

		function __construct($value) { 
			$this->value = $value; 
		}
	}

	function generate_binary_tree($depth){
		$node = node_generator();

		if ($depth > 0) {
	        $node->left_node  = generate_binary_tree($depth-1);
	        $node->right_node = generate_binary_tree($depth-1);
	    }
	    
	    return $node;
	}

	/*
		Algorithm Preorder(tree)
   			1. Visit the root.
   			2. Traverse the left subtree, i.e., call preorder_print(left_node)
   			3. Traverse the right subtree, i.e., call preorder_print(right_node) 
   */

	function preorder_print($root) {
		if(!$root)
			return;

		echo $root->value."-";

		preorder_print($root->left_node);
		preorder_print($root->right_node);
	}


	/*
		The function generate a node that has
		value between 0-20 and return it.
   */
   	function node_generator() {
   		$value = rand(0,20);
		$node = new tree_node($value);

		return $node;
	}

	
	$root = generate_binary_tree(8);

	preorder_print($root);

?>