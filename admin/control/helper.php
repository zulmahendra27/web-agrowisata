<?php
// Fungsi DML
function select($c, $table, $opt = [])
{
  $select = array_key_exists('select', $opt) ? $opt['select'] : '*';
  $where = array_key_exists('where', $opt) ? $opt['where'] : 1;

  $limit = "";
  $order = "";

  if (array_key_exists('limit', $opt)) {
    $limit = "LIMIT " . $opt['limit'];
  }

  if (array_key_exists('order', $opt)) {
    $order = $opt['order'];
  }

  if (array_key_exists('join', $opt)) {
    return $c->query("SELECT $select FROM $table $opt[join] WHERE $where $order $limit");
  }

  return $c->query("SELECT $select FROM $table WHERE $where $order $limit");
}

function insert($c, $data, $table)
{
  $key = array();
  $value = array();

  foreach ($data as $k => $v) {
    array_push($key, $k);
    array_push($value, "'" . $v . "'");
  }

  $column = implode(',', $key);
  $values = implode(',', $value);

  return $c->query("INSERT INTO $table($column) VALUES ($values)");
}

function update($c, $data, $table, $where)
{
  // $key = array();
  $value = array();

  foreach ($data as $k => $v) {
    // array_push($key, $k);
    array_push($value, $k . "='" . $v . "'");
  }

  $values = implode(',', $value);

  return $c->query("UPDATE $table SET $values WHERE $where");
}

function delete($c, $table, $where)
{
  return $c->query("DELETE FROM $table WHERE $where");
}

// =========================================================================================


// Fungsi Alert
function alert($text, $type = 'success')
{
  $type = 'show' . ucfirst($type) . 'Toast';

  return html_entity_decode("<script>$type('$text')</script>");
}
