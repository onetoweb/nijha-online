.. _top:
.. title:: Client

`Back to index <index.rst>`_

======
Client
======

.. contents::
    :local:


List clients
````````````

.. code-block:: php
    
    $result = $client->client->list();


Create client
`````````````

.. code-block:: php
    
    $clientName = 'client name';
    $result = $client->client->create($clientName);


Delete client
`````````````

.. code-block:: php
    
    $clientId = 42;
    $result = $client->client->delete(clientId);


`Back to top <#top>`_