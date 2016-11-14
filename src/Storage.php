<?php

namespace Emerap\Storage;

/**
 * Provides a class Storage.
 */
abstract class Storage implements StorageInterface {

  /**
   * Storage id.
   *
   * @var string
   */
  protected $storageId;

  /**
   * Getter for storageId property.
   *
   * @return string
   *    Property storageId value.
   */
  public function getStorageId() {
    return $this->storageId;
  }

  /**
   * Fluent setter for storageId property.
   *
   * @param string $storage_id
   *    Value for storageId property.
   *
   * @return $this
   */
  public function setStorageId($storage_id) {
    $this->storageId = $storage_id;
    return $this;
  }

}
