--TEST--
Aggregate - Positive case with where predicate not satisfying any record and
hence empty aggregation.

--SKIPIF--
<?php
include dirname(__FILE__)."/../../astestframework/astest-phpt-loader.inc";
aerospike_phpt_skipif("Aggregate", "testAggregatePositiveEmptyAggregationResult");

--FILE--
<?php
include dirname(__FILE__)."/../../astestframework/astest-phpt-loader.inc";
aerospike_phpt_runtest("Aggregate", "testAggregatePositiveEmptyAggregationResult");
--EXPECT--
OK


