<?hh /* @generated by make_suite.sh */

function foo(inout $x) {}

function main() {
  static $x;
  foo(inout $x[1][2][3]);
}

main();
