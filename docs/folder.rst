.. _top:
.. title:: Folder

`Back to index <index.rst>`_

======
Folder
======

.. contents::
    :local:


List Folders
````````````

.. code-block:: php
    
    $result = $client->folder->list();


Create Folder
`````````````

.. code-block:: php
    
    $projectId = 42;
    $folderName = 'Folder name';
    $result = $client->folder->create($projectId, $folderName);


`Back to top <#top>`_