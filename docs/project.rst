.. _top:
.. title:: Project

`Back to index <index.rst>`_

=======
Project
=======

.. contents::
    :local:


List projects by client id
``````````````````````````

.. code-block:: php
    
    $clientId = 42;
    $result = $client->project->listByClientId($clientId);


Create project
``````````````

.. code-block:: php
    
    $clientId = 42;
    $name = 'Project name';
    
    // optional
    $number = 42;
    $expires = (new DateTime())->modify('+30 days');
    
    $result = $client->project->create($clientId, $name, $number, $expires);


Delete project
``````````````

.. code-block:: php
    
    $projectId = 42;
    $result = $client->project->delete($projectId);


`Back to top <#top>`_