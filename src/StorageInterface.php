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
   * @return mixed
   *   Storage value.
   */
  public function set();

  /**
   * Delete value from storage.
   */
  public function delete();

  /**
   * Clear values in storage.
   */
  public function clear();

}
