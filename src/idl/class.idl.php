<?php
/**
 * Automatically generated by running "php schema.php class".
 *
 * You may modify the file, but re-running schema.php against this file will
 * standardize the format without losing your schema changes. It does lose
 * any changes that are not part of schema. Use "note" field to comment on
 * schema itself, and "note" fields are not used in any code generation but
 * only staying within this file.
 */
///////////////////////////////////////////////////////////////////////////////
// Preamble: C++ code inserted at beginning of ext_{name}.h

DefinePreamble(<<<CPP

CPP
);

///////////////////////////////////////////////////////////////////////////////
// Constants
//
// array (
//   'name' => name of the constant
//   'type' => type of the constant
//   'note' => additional note about this constant's schema
// )


///////////////////////////////////////////////////////////////////////////////
// Functions
//
// array (
//   'name'   => name of the function
//   'desc'   => description of the function's purpose
//   'flags'  => attributes of the function, see base.php for possible values
//   'opt'    => optimization callback function's name for compiler
//   'note'   => additional note about this function's schema
//   'return' =>
//      array (
//        'type'  => return type, use Reference for ref return
//        'desc'  => description of the return value
//      )
//   'args'   => arguments
//      array (
//        'name'  => name of the argument
//        'type'  => type of the argument, use Reference for output parameter
//        'value' => default value of the argument
//        'desc'  => description of the argument
//      )
// )

DefineFunction(
  array(
    'name'   => "get_declared_classes",
    'desc'   => "Gets the declared classes.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => VariantMap,
      'desc'   => "Returns an array of the names of the declared classes in the current script.\n\nNote that depending on what extensions you have compiled or loaded into PHP, additional classes could be present. This means that you will not be able to define your own classes using these names. There is a list of predefined classes in the Predefined Classes section of the appendices.",
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "get_declared_interfaces",
    'desc'   => "Gets the declared interfaces.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => VariantMap,
      'desc'   => "Returns an array of the names of the declared interfaces in the current script.",
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "get_declared_traits",
    'desc'   => "Gets the declared traits.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => VariantMap,
      'desc'   => "Returns an array of the names of the declared traits in the current script.",
    ),
  ));

DefineFunction(
  array(
    'name'   => "class_exists",
    'desc'   => "This function checks whether or not the given class has been defined.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if class_name is a defined class, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "class_name",
        'type'   => String,
        'desc'   => "The class name. The name is matched in a case-insensitive manner.",
      ),
      array(
        'name'   => "autoload",
        'type'   => Boolean,
        'value'  => "true",
        'desc'   => "Whether or not to call __autoload by default.",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "interface_exists",
    'desc'   => "Checks if the given interface has been defined.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if the interface given by interface_name has been defined, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "interface_name",
        'type'   => String,
        'desc'   => "The interface name",
      ),
      array(
        'name'   => "autoload",
        'type'   => Boolean,
        'value'  => "true",
        'desc'   => "Whether to call __autoload or not by default.",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "trait_exists",
    'desc'   => "Checks if the given trait has been defined.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if the trait given by trait_name has been defined, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "trait_name",
        'type'   => String,
        'desc'   => "The trait name",
      ),
      array(
        'name'   => "autoload",
        'type'   => Boolean,
        'value'  => "true",
        'desc'   => "Whether to call __autoload or not by default.",
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "get_class_methods",
    'desc'   => "Gets the class methods names.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => VariantMap,
      'desc'   => "Returns an array of method names defined for the class specified by class_name. In case of an error, it returns NULL.",
    ),
    'args'   => array(
      array(
        'name'   => "class_or_object",
        'type'   => Variant,
        'desc'   => "The class name or an object instance",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "get_class_vars",
    'desc'   => "Get the default properties of the given class.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => VariantMap,
      'desc'   => "Returns an associative array of declared properties visible from the current scope, with their default value. The resulting array elements are in the form of varname => value.",
    ),
    'args'   => array(
      array(
        'name'   => "class_name",
        'type'   => String,
        'desc'   => "The class name",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "get_class_constants",
    'desc'   => "Get the constants of the given class.",
    'flags'  =>  HasDocComment | HipHopSpecific,
    'return' => array(
      'type'   => VariantMap,
      'desc'   => "Returns an associative array of constants with their values."
    ),
    'args'   => array(
      array(
        'name'   => "class_name",
        'type'   => String,
        'desc'   => "The class name",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "get_class",
    'desc'   => "Gets the name of the class of the given object.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "Returns the name of the class of which object is an instance. Returns FALSE if object is not an object.\n\nIf object is omitted when inside a class, the name of that class is returned.",
    ),
    'args'   => array(
      array(
        'name'   => "object",
        'type'   => Variant,
        'value'  => "null_variant",
        'desc'   => "The tested object. This parameter may be omitted when inside a class.",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "get_parent_class",
    'desc'   => "Retrieves the parent class name for object or class.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "Returns the name of the parent class of the class of which object is an instance or the name.\n\nIf the object does not have a parent FALSE will be returned.\n\nIf called without parameter outside object, this function returns FALSE.",
    ),
    'args'   => array(
      array(
        'name'   => "object",
        'type'   => Variant,
        'value'  => "null_variant",
        'desc'   => "The tested object or class name",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "is_a",
    'desc'   => "Checks if the given object is of this class or has this class as one of its parents.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if the object is of this class or has this class as one of its parents, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "object",
        'type'   => Object,
        'desc'   => "The tested object",
      ),
      array(
        'name'   => "class_name",
        'type'   => String,
        'desc'   => "The class name",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "is_subclass_of",
    'desc'   => "Checks if the given object has the class class_name as one of its parents.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "This function returns TRUE if the object object, belongs to a class which is a subclass of class_name, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "class_or_object",
        'type'   => Variant,
        'desc'   => "A class name or an object instance",
      ),
      array(
        'name'   => "class_name",
        'type'   => String,
        'desc'   => "The class name",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "method_exists",
    'desc'   => "Checks if the class method exists in the given object.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if the method given by method_name has been defined for the given object, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "class_or_object",
        'type'   => Variant,
        'desc'   => "An object instance or a class name",
      ),
      array(
        'name'   => "method_name",
        'type'   => String,
        'desc'   => "The method name",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "property_exists",
    'desc'   => "This function checks if the given property exists in the specified class.\n\nAs opposed with isset(), property_exists() returns TRUE even if the property has the value NULL.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if the property exists, FALSE if it doesn't exist or NULL in case of an error.",
    ),
    'args'   => array(
      array(
        'name'   => "class_or_object",
        'type'   => Variant,
        'desc'   => "The class name or an object of the class to test for",
      ),
      array(
        'name'   => "property",
        'type'   => String,
        'desc'   => "The name of the property",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "get_object_vars",
    'desc'   => "Gets the accessible non-static properties of the given object according to scope.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
      'desc'   => "Returns an associative array of defined object accessible non-static properties for the specified object in scope. If a property have not been assigned a value, it will be returned with a NULL value.",
    ),
    'args'   => array(
      array(
        'name'   => "object",
        'type'   => Variant,
        'desc'   => "An object instance.",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "call_user_method_array",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "method_name",
        'type'   => String,
        'desc'   => "The method name being called.",
      ),
      array(
        'name'   => "obj",
        'type'   => Variant | Reference,
        'desc'   => "The object that method_name is being called on.",
      ),
      array(
        'name'   => "paramarr",
        'type'   => VariantVec,
        'desc'   => "An array of parameters.",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "call_user_method",
    'flags'  =>  HasDocComment | VariableArguments,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "method_name",
        'type'   => String,
        'desc'   => "The method name being called.",
      ),
      array(
        'name'   => "obj",
        'type'   => Variant | Reference,
        'desc'   => "The object that method_name is being called on.",
      ),
    ),
    'taint_observer' => false,
  ));


///////////////////////////////////////////////////////////////////////////////
// Classes
//
// BeginClass
// array (
//   'name'   => name of the class
//   'desc'   => description of the class's purpose
//   'flags'  => attributes of the class, see base.php for possible values
//   'note'   => additional note about this class's schema
//   'parent' => parent class name, if any
//   'ifaces' => array of interfaces tihs class implements
//   'bases'  => extra internal and special base classes this class requires
//   'footer' => extra C++ inserted at end of class declaration
// )
//
// DefineConstant(..)
// DefineConstant(..)
// ...
// DefineFunction(..)
// DefineFunction(..)
// ...
// DefineProperty
// DefineProperty
//
// array (
//   'name'  => name of the property
//   'type'  => type of the property
//   'flags' => attributes of the property
//   'desc'  => description of the property
//   'note'  => additional note about this property's schema
// )
//
// EndClass()

