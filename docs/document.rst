.. _top:
.. title:: Document

`Back to index <index.rst>`_

========
Document
========

.. contents::
    :local:

List documents
``````````````

.. code-block:: php
    
    $folderId = 42;
    $result = $client->document->list($folderId);


Create document
```````````````

.. code-block:: php
    
    $folderId = 42;
    $filename = '/path/to/file.pdf';
    $result = $client->document->create($folderId, $filename);


Delete document
```````````````

.. code-block:: php
    
    $documentId = 42;
    $result = $client->document->delete($documentId);


`Back to top <#top>`_