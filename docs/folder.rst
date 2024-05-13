.. _top:
.. title:: Folder

`Back to index <index.rst>`_

======
Folder
======

.. contents::
    :local:


List folders
````````````

.. code-block:: php
    
    $result = $client->folder->list();


List folders by project id
``````````````````````````

.. code-block:: php
    
    $projectId = 42;
    $result = $client->folder->listByProjectId($projectId);


Create folder
`````````````

.. code-block:: php
    
    $projectId = 42;
    $folderName = 'Folder name';
    $result = $client->folder->create($projectId, $folderName);


Delete folder
`````````````

.. code-block:: php
    
    $folderId = 42;
    $result = $client->folder->delete($folderId);


`Back to top <#top>`_