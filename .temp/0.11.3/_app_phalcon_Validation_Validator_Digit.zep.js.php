<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *',
    'file' => '/app/phalcon/Validation/Validator/Digit.zep',
    'line' => 11,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'Phalcon\\Validation\\Validator',
    'file' => '/app/phalcon/Validation/Validator/Digit.zep',
    'line' => 13,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\Messages\\Message',
        'file' => '/app/phalcon/Validation/Validator/Digit.zep',
        'line' => 13,
        'char' => 29,
      ),
    ),
    'file' => '/app/phalcon/Validation/Validator/Digit.zep',
    'line' => 14,
    'char' => 3,
  ),
  3 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\Validation\\Validation',
        'file' => '/app/phalcon/Validation/Validator/Digit.zep',
        'line' => 14,
        'char' => 34,
      ),
    ),
    'file' => '/app/phalcon/Validation/Validator/Digit.zep',
    'line' => 15,
    'char' => 3,
  ),
  4 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\Validation\\AbstractValidator',
        'file' => '/app/phalcon/Validation/Validator/Digit.zep',
        'line' => 15,
        'char' => 41,
      ),
    ),
    'file' => '/app/phalcon/Validation/Validator/Digit.zep',
    'line' => 50,
    'char' => 2,
  ),
  5 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Check for numeric character(s)
 *
 * ```php
 * use Phalcon\\Validation\\Validation;
 * use Phalcon\\Validation\\Validator\\Digit as DigitValidator;
 *
 * $validator = new Validation();
 *
 * $validator->add(
 *     "height",
 *     new DigitValidator(
 *         [
 *             "message" => ":field must be numeric",
 *         ]
 *     )
 * );
 *
 * $validator->add(
 *     [
 *         "height",
 *         "width",
 *     ],
 *     new DigitValidator(
 *         [
 *             "message" => [
 *                 "height" => "height must be numeric",
 *                 "width"  => "width must be numeric",
 *             ],
 *         ]
 *     )
 * );
 * ```
 *',
    'file' => '/app/phalcon/Validation/Validator/Digit.zep',
    'line' => 51,
    'char' => 5,
  ),
  6 => 
  array (
    'type' => 'class',
    'name' => 'Digit',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'AbstractValidator',
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'template',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'Field :field must be numeric',
            'file' => '/app/phalcon/Validation/Validator/Digit.zep',
            'line' => 53,
            'char' => 54,
          ),
          'file' => '/app/phalcon/Validation/Validator/Digit.zep',
          'line' => 57,
          'char' => 6,
        ),
      ),
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'validate',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'validation',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'Validation',
                'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                'line' => 58,
                'char' => 52,
              ),
              'reference' => 0,
              'file' => '/app/phalcon/Validation/Validator/Digit.zep',
              'line' => 58,
              'char' => 53,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'field',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/app/phalcon/Validation/Validator/Digit.zep',
              'line' => 58,
              'char' => 64,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'value',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'validation',
                      'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                      'line' => 60,
                      'char' => 32,
                    ),
                    'name' => 'getValue',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'field',
                          'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                          'line' => 60,
                          'char' => 47,
                        ),
                        'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                        'line' => 60,
                        'char' => 47,
                      ),
                    ),
                    'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                    'line' => 60,
                    'char' => 48,
                  ),
                  'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                  'line' => 60,
                  'char' => 48,
                ),
              ),
              'file' => '/app/phalcon/Validation/Validator/Digit.zep',
              'line' => 62,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'or',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'is_int',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                        'line' => 62,
                        'char' => 24,
                      ),
                      'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                      'line' => 62,
                      'char' => 24,
                    ),
                  ),
                  'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                  'line' => 62,
                  'char' => 27,
                ),
                'right' => 
                array (
                  'type' => 'fcall',
                  'name' => 'ctype_digit',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                        'line' => 62,
                        'char' => 46,
                      ),
                      'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                      'line' => 62,
                      'char' => 46,
                    ),
                  ),
                  'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                  'line' => 62,
                  'char' => 48,
                ),
                'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                'line' => 62,
                'char' => 48,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                    'line' => 63,
                    'char' => 24,
                  ),
                  'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                  'line' => 64,
                  'char' => 9,
                ),
              ),
              'file' => '/app/phalcon/Validation/Validator/Digit.zep',
              'line' => 66,
              'char' => 18,
            ),
            2 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'validation',
                  'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                  'line' => 66,
                  'char' => 20,
                ),
                'name' => 'appendMessage',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                        'line' => 67,
                        'char' => 18,
                      ),
                      'name' => 'messageFactory',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'validation',
                            'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                            'line' => 67,
                            'char' => 44,
                          ),
                          'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                          'line' => 67,
                          'char' => 44,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'field',
                            'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                            'line' => 67,
                            'char' => 51,
                          ),
                          'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                          'line' => 67,
                          'char' => 51,
                        ),
                      ),
                      'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                      'line' => 68,
                      'char' => 9,
                    ),
                    'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                    'line' => 68,
                    'char' => 9,
                  ),
                ),
                'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                'line' => 68,
                'char' => 10,
              ),
              'file' => '/app/phalcon/Validation/Validator/Digit.zep',
              'line' => 70,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                'line' => 70,
                'char' => 21,
              ),
              'file' => '/app/phalcon/Validation/Validator/Digit.zep',
              'line' => 71,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Executes the validation
     *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/app/phalcon/Validation/Validator/Digit.zep',
                'line' => 59,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/app/phalcon/Validation/Validator/Digit.zep',
            'line' => 59,
            'char' => 5,
          ),
          'file' => '/app/phalcon/Validation/Validator/Digit.zep',
          'line' => 58,
          'last-line' => 72,
          'char' => 19,
        ),
      ),
      'file' => '/app/phalcon/Validation/Validator/Digit.zep',
      'line' => 51,
      'char' => 5,
    ),
    'file' => '/app/phalcon/Validation/Validator/Digit.zep',
    'line' => 51,
    'char' => 5,
  ),
);