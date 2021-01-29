# social-links-service

These are the tables for our database that we are going to work with

### User
| property | type |
| - | - |
| id | **int** |
| email | **string** |
| username | **string** |
| password | **string** |
| background_color | **string** |
| text_color| **string** |

----


### Link
| property | type |
| - | - |
| id | **int** |
| user_id | **int** |
| link | **string** |
| name | **string** |

----

### Visit
| property | type |
| - | - |
| id | **int** |
| link_id | **string** |
| user_agent | **string** |


Hope you enjoy! ~~😄😄~~
