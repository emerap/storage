<?php

namespace Emerap\Storage;

/**
 * Provides a interface StorageInterface.
 */
interface StorageInterface {

  /**
   * Get value from storage.
   *
   * @return mixed
   *   Storage value.
   */
  public function get();

  /**
   * Set value storage.
   *
   * @param mixed $value
   *   Value.
   *
   * @return mixed Storage value.
   * Storage value.
   */
  public function set($value);

  /**
   * Delete value from storage.
   */
  public function delete();

  /**
   * Clear values in storage.
   */
  public function clear();

}
